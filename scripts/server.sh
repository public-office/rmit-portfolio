#!/bin/sh
# Basic Ubuntu/Apache setup
# Update Ubuntu
apt-get update;
apt-get -y upgrade;

# Install Apache
apt-get -y install apache2 php libapache2-mod-php7.0 php-mbstring php7.0-curl php7.0-zip php7.0-json php7.0-xml unzip wget;

# Some other stuff
chown -Rf www-data:www-data /var/www/html;
a2enmod rewrite;
service apache2 restart;