FROM php:8-fpm
RUN apt-get update && apt-get install -y libmcrypt-dev git libzip-dev zip mariadb-client --no-install-recommends
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN pecl install mcrypt-1.0.4  && docker-php-ext-enable mcrypt
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
