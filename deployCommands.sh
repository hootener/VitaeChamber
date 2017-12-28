#!/bin/bash

#build the site
docker-compose -f prod.docker-compose.yml up jigsaw_build_assets && docker-compose -f prod.docker-compose.yml up jigsaw_build_site

#commit the builds to master
git add . && git commit -m "Demployment Commit"

#push the build output to gh-pages.
git subtree push --prefix build_production origin gh-pages