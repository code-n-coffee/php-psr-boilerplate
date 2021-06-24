<?php

declare(strict_types=1);

namespace App;

use App\Controller\Admin\AdminController;
use App\Controller\IndexController;
use App\Middleware\AuthMiddleware;
use League\Route\RouteGroup;
use League\Route\Router;

$router = new Router();

$router->get('/', [IndexController::class, 'indexAction']);

$router->group('/admin',function (RouteGroup $router) {
    $router->get('/', [AdminController::class, 'indexAction']);
})->middleware(new AuthMiddleware());

return $router;
