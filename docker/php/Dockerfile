FROM php:8.1-fpm

RUN apt-get update && apt-get install -y

RUN apt-get -y install libzip-dev
RUN docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY ./conf.d/php.ini /usr/local/etc/php/
