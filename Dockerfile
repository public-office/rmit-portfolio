FROM php:7-apache
RUN apt-get update && apt-get -y install imagemagick \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip
RUN a2enmod rewrite
COPY . /var/www/html/
RUN chmod -R 777 /var/www/html
