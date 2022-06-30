#!/bin/sh
cd /var/www/onedevs.tech
sudo git checkout .env
sudo git pull origin main
apubu permissions onedevs.tech
echo ""
echo NO OLVIDES MIRAR EL .env
echo ""
