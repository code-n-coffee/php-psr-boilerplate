<?php

declare(strict_types=1);

// import dependencies
include '../vendor/autoload.php';

// initialize container
$container = include '../src/di.php';
$strategy = (new League\Route\Strategy\ApplicationStrategy)->setContainer($container);

// initialize router
$router = include '../src/router.php';
$router->setStrategy($strategy);

// define http methods
$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

// process request
$response = $router->dispatch($request);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
