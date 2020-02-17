#!/bin/bash

echo "Testing the die() on files"

if grep -r --include=\*.php --exclude=class-pclzip.php --exclude=canonical.php --exclude=class-IXR-server.php --exclude-dir=smart-slider-3 --extended-regexp "(^|\ )die\(('|\")" ; then exit 1
fi

echo "Testing the var_dump() on files"

if grep --extended-regexp "(^|\ )var_dump\(('|\")" -r --include=\*.php; then exit 1
fi

echo "Testing the print_r() on files"

if grep --extended-regexp "(^|\ )print_r\(('|\")" -r --include=\*.php; then exit 1
fi