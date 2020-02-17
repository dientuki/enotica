#!/bin/bash

echo "Testing the merge erros on all files"

if fgrep --binary-files=without-match "<<<<<<<" -r --exclude-dir=fonts --exclude-dir=scripts; then exit 1
fi

if fgrep --binary-files=without-match ">>>>>>>" -r --exclude-dir=fonts --exclude-dir=scripts; then exit 1
fi