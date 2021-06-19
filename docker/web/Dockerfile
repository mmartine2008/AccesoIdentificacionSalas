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

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install zip

ENV DEBIAN_FRONTEND noninteractive
# Informix SDK stuff
COPY --from=ibmcom/informix-innovator-c:12.10.FC11IE /opt/ibm/informix/incl/cli/ /opt/informix/incl/cli/
COPY --from=ibmcom/informix-innovator-c:12.10.FC11IE /opt/ibm/informix/incl/esql/ /opt/informix/incl/esql/
COPY --from=ibmcom/informix-innovator-c:12.10.FC11IE /opt/ibm/informix/lib/cli/ /opt/informix/lib/cli/
COPY --from=ibmcom/informix-innovator-c:12.10.FC11IE /opt/ibm/informix/lib/esql/ /opt/informix/lib/esql/
COPY --from=ibmcom/informix-innovator-c:12.10.FC11IE /opt/ibm/informix/gls/ /opt/informix/gls/

ENV LC_ALL=C

RUN cd /tmp && ln -s /opt/ibm/informix /usr/informix && \
    curl -o PDO_INFORMIX-1.3.3.tgz https://pecl.php.net/get/PDO_INFORMIX-1.3.3.tgz && \
    tar xvfz PDO_INFORMIX-1.3.3.tgz && cd PDO_INFORMIX-1.3.3 && \
    phpize && ./configure --with-pdo-informix=/opt/informix && \
    make && make install

RUN touch /usr/local/etc/php/conf.d/informix.ini
RUN echo "extension=pdo_informix.so" > /usr/local/etc/php/conf.d/informix.ini
RUN cp /tmp/PDO_INFORMIX-1.3.3/modules/pdo_informix.so /usr/local/lib/php/extensions/no-debug-non-zts-20151012

ENV LD_LIBRARY_PATH /opt/informix/lib/esql:/opt/informix/lib/cli
ENV INFORMIXDIR /opt/informix
ENV INFORMIXSQLHOSTS /opt/informix/etc/sqlhosts
ENV INFORMIXSERVER informix
ENV ODBCINI /opt/informix/etc/odbc.ini
COPY ./config/sqlhosts /opt/informix/etc/sqlhosts
COPY ./config/odbc.ini /opt/informix/etc/odbc.ini

RUN a2enmod rewrite 

COPY conf/apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled

WORKDIR /var/www/html
