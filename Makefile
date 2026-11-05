# The web (*.html) and print (*-print.html) variants are both hand-edited peers;
# only the PDFs are generated. `check` guards the pair against silent drift.
.PHONY: pdfs check setup

pdfs: check
	.venv/bin/python generate_pdfs.py

check:
	python3 check_drift.py

setup:
	python3 -m venv .venv
	.venv/bin/pip install -r requirements.txt
