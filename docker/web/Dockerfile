FROM php:7.0-apache

RUN apt-get update 

RUN docker-php-ext-install pdo pdo_mysql 

RUN apt-get update 

RUN apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
  && docker-php-ext-configure gd \
     --with-freetype-dir=/usr/include/freetype2 \
     --with-png-dir=/usr/include \
     --with-jpeg-dir=/usr/include \
  && docker-php-ext-install gd 

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install zip

RUN a2enmod rewrite 

COPY conf/apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled

WORKDIR /var/www/html
