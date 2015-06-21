#!/usr/bin/env bash

/usr/bin/mysql -uroot -p$1 -e "CREATE DATABASE IF NOT EXISTS demo;"

cd /vagrant

if [ ! -f .env]; then
    composer run-script post-root-package-install
fi

composer install --prefer-dist
