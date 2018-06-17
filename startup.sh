#!/usr/bin/env bash

cd /var/www/Symfony4-Api

composer install -n --optimize-autoloader

php app/console cache:clear --env=prod --no-debug

chown -R www-data:www-data /tmp/sf2 && chmod -R 770 /tmp/sf2

# remove docker:
$ sudo apt-get remove docker docker-engine
# reinstall with
curl -sSL https://get.docker.com/ | sh
sudo usermod -aG docker $USER