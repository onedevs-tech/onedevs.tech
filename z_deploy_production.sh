#!/bin/sh
cd /var/www/onedevs.tech
sudo git checkout .env
sudo git pull origin main
sudo cp .env.production .env
apubu permissions onedevs.tech
