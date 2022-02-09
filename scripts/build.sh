#!/usr/bin/env bash

# ensure you have installed the following packages with brew:
# - go
# - dotnet-sdk

set -eo pipefail

cd "$(dirname "$0")/.."
root=$(pwd)

# build go example
cd sidecar/go
GOARCH=amd64 GOOS=linux go build example.go
cd $root

# build dotnet example
cd sidecar/dotnet
dotnet lambda package
