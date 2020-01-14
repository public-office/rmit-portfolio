#!/bin/sh
# Basic Ubuntu/Apache setup
# Update Ubuntu
sudo apt-get update;
sudo apt-get -y upgrade;

# Install Apache
sudo apt-get -y install apache2 php libapache2-mod-php7.4 php-mbstring php7.4-curl php7.4-zip php7.4-json php7.4-xml imagemagick unzip zip wget;

# Some other stuff
chown -Rf www-data:www-data /var/www/html;
sudo a2enmod rewrite;
sudo service apache2 restart;
