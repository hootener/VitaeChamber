#!/usr/bin/env python3
"""Generate PDF versions of resume and CV from print HTML templates."""

from pathlib import Path
from weasyprint import HTML

docs = Path(__file__).parent / "docs"

print("Generating resume.pdf...")
HTML(filename=str(docs / "resume-print.html")).write_pdf(str(docs / "resume.pdf"))

print("Generating vitae.pdf...")
HTML(filename=str(docs / "vitae-print.html")).write_pdf(str(docs / "vitae.pdf"))

print("Done.")
