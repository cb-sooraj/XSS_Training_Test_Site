#!/bin/bash

if ! command -v php > /dev/null; then
  echo "php is !installed"
    exit
fi

echo "[~] Opening Chargebee XSS Challenge"
php -S 127.0.0.1:$1
