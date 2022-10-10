FROM php:8.0-fpm

ENV TZ Asia/Tokyo

# install Library
RUN apt-get update && \
	apt-get install -y git unzip libzip-dev libicu-dev libonig-dev && \
	docker-php-ext-install intl pdo_mysql zip bcmath
		
# config file COPY
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

# install Composer
COPY --from=composer:2.4 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/app