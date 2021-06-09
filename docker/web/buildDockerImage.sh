#!/bin/bash
VERSION=2.0.0.tudai

docker build --build-arg VERSION=$VERSION -t "mydocker/apache:$VERSION" -f Dockerfile .

