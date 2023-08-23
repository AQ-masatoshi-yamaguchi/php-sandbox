FROM php:8.0-fpm

RUN apt-get update && apt-get install -y

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update

COPY ./conf.d/php.ini /usr/local/etc/php/
