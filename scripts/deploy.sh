#!/usr/bin/env bash

cd "$(dirname "$0")/.."
root=$(pwd)

sh scripts/build.sh

php artisan sidecar:deploy --activate
