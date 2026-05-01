pdfs:
	.venv/bin/python generate_pdfs.py

setup:
	python3 -m venv .venv
	.venv/bin/pip install -r requirements.txt
