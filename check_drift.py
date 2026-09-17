#!/usr/bin/env python3
"""Verify the web and print variants of the resume and CV still say the same thing.

There is no single source of truth in this repo: docs/resume.html and
docs/resume-print.html are peers, each hand-edited, and the same is true of the
vitae pair. Only the PDFs are generated (by generate_pdfs.py, from the -print
files). That means a content edit applied to one variant and not the other
silently ships a website and a PDF that disagree.

This script catches that. It compares the substantive prose of each pair, after
normalizing away the cosmetic differences the two variants legitimately have
(en-dashes vs hyphens, trailing periods, "Ph.D." vs "Ph D", punctuation and
spacing). Layout chrome that exists in only one variant by design -- the web
nav, the web sidebar, the print header -- is skipped by CSS class.

A difference reported here is a real difference in wording. Fix it in whichever
variant is wrong, then re-run.

Usage:  python3 check_drift.py         (or: make check)
Exit:   0 if the pairs agree, 1 if they have drifted.
"""

from html.parser import HTMLParser
from pathlib import Path
import re
import sys
import unicodedata

DOCS = Path(__file__).parent / "docs"

PAIRS = [
    ("resume.html", "resume-print.html"),
    ("vitae.html", "vitae-print.html"),
]

# Class names whose subtree is layout chrome, not content. Anything rendered
# inside one of these is skipped in both variants.
CHROME = {
    "navbar",          # web: top nav ("Resume", "CV", brand)
    "nav-link",
    "sidebar-wrapper", # web resume: photo, contact, education, skills sidebar
    "contact-list",    # web resume: contact links
    "contact-info",    # web CV: contact section body
    "head-text",       # web CV: section labels (print renders these as .label)
    "doc-header",      # print: name/tagline/contact header block
    "contact",         # print: contact line in that header
    "tagline",
}

# Text that exists in one variant by design. Normalized form, so add entries
# exactly as the failure output prints them.
EXPECTED_ONLY = {
    "resume.html": {
        "ivebeendirectlyorindirectlyresponsibleforamultitudeofprojectsthroughoutmycareerrelevantexamplesinclude",
    },
    "resume-print.html": {
        # Skills: the web variant lists these in the sidebar (skipped as chrome),
        # the print variant renders the same set as one interpunct-joined line.
        "ctoleadershipsystemarchitecturesoftwareengineeringtechnicalleadershipproductmanagement"
        "teamscalingbusinessstrategyfundraisingwebapisrestwebsocketopensourcedevelopment"
        "statisticalanalysisdevelopertoolscodequalityplatforms",
    },
    "vitae.html": set(),
    "vitae-print.html": set(),
}


class Content(HTMLParser):
    """Collect the text of every <li> and <p> not inside a chrome element."""

    CAPTURE = {"li", "p"}

    def __init__(self):
        super().__init__(convert_charrefs=True)
        self.stack = []
        self.buf = None
        self.out = []

    def _in_chrome(self):
        return any(c in CHROME for _, classes in self.stack for c in classes)

    def handle_starttag(self, tag, attrs):
        classes = dict(attrs).get("class", "").split()
        self.stack.append((tag, classes))
        if tag in self.CAPTURE and self.buf is None and not self._in_chrome():
            self.buf = []

    def handle_endtag(self, tag):
        if tag in self.CAPTURE and self.buf is not None:
            text = "".join(self.buf).strip()
            if text:
                self.out.append(text)
            self.buf = None
        while self.stack:
            if self.stack.pop()[0] == tag:
                break

    def handle_data(self, data):
        if self.buf is not None:
            self.buf.append(data)


def normalize(text):
    """Reduce to comparable form: letters and digits only, lowercased.

    This deliberately discards punctuation and spacing so that the two
    variants' differing house styles -- "2007 - 2008" vs "2007 - 2008",
    "Ph D" vs "Ph.D.", a trailing period or not -- do not register as drift,
    while any change to the actual words does.
    """
    text = unicodedata.normalize("NFKD", text)
    text = re.sub(r"\s+", " ", text)
    return re.sub(r"[^a-z0-9]", "", text.lower())


def read(name):
    parser = Content()
    parser.feed((DOCS / name).read_text())
    # Map normalized form -> original, for readable output.
    return {normalize(t): t for t in parser.out if normalize(t)}


def main():
    drifted = False
    for web, prt in PAIRS:
        a, b = read(web), read(prt)
        only_web = (set(a) - set(b)) - EXPECTED_ONLY[web]
        only_prt = (set(b) - set(a)) - EXPECTED_ONLY[prt]

        if not only_web and not only_prt:
            print(f"ok    {web} <-> {prt}  ({len(a)} blocks agree)")
            continue

        drifted = True
        print(f"DRIFT {web} <-> {prt}")
        for key in sorted(only_web):
            print(f"        only in {web}:  {a[key][:140]}")
        for key in sorted(only_prt):
            print(f"        only in {prt}:  {b[key][:140]}")
        print()

    if drifted:
        print("The pairs disagree. Fix the wrong variant, then re-run; if a difference")
        print("is intentional, add its normalized key to EXPECTED_ONLY in this file.")
        return 1
    print("\nAll variants agree.")
    return 0


if __name__ == "__main__":
    sys.exit(main())
