[![Build Status](https://travis-ci.com/code-n-coffee/php-psr-boilerplate.svg?branch=master)](https://travis-ci.com/code-n-coffee/php-psr-boilerplate)

## Really Simple PSR's Compliant PHP Boilerplate

This is a PSR's compliant php boilerplate based on `thephpleague` libs and have all you will need to quick start your
application without a framework.

### Features:

- dockerized (nginx, php and mysql);
- autoload (PSR 4);
- Di with auto wire (PSR 11);
- Router (PSR 7);
- Middlewares (PSR 15);
- phpunit tests;
- phpstan static analysis;
- travis ci ready;

you can find useful documentation at:

- https://route.thephpleague.com/
- https://container.thephpleague.com/

### Usage

start server: `docker-compose up`;

install dependencies: `docker-compose exec php composer install`;

run tests: `docker-compose exec php vendor/bin/phpunit`;

run static analysis: `docker-compose exec php vendor/bin/phpstan`;

run phpcs analysis: `docker-compose exec php vendor/bin/phpcs`; 

run phpcs fixes: `docker-compose exec php vendor/bin/phpcbf`;
