develop:
	npm run watch

build:
	npm install
	npm run dev
	./vendor/bin/jigsaw build

prod:
	rm -rf docs
	npm run prod
	echo "elihooten.com" > docs/CNAME
