#!/bin/bash

sudo chmod +x ./SQLTableCreate.sh;
./SQLTableCreate.sh;
composer install;
php -S localhost:8080;

exit 0
