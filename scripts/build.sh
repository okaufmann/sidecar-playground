#!/usr/bin/env bash

set -eo pipefail

cd "$(dirname "$0")/.."
pwd
cd sidecar/go
GOARCH=amd64 GOOS=linux go build example.go
