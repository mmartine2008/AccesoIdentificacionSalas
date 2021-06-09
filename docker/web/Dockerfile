FROM php:7.0-apache

RUN apt-get update 

RUN docker-php-ext-install pdo pdo_mysql 

RUN a2enmod rewrite 

COPY conf/apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled

WORKDIR /var/www/html
