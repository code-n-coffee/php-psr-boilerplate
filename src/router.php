<?php

declare(strict_types=1);

namespace App;

use App\Controller\IndexController;
use League\Route\Router;

$router = new Router();

$router->get('/', [IndexController::class, 'indexAction']);
$router->get( '/{path}', [IndexController::class, 'catchAllAction']);
$router->post( '/{path}', [IndexController::class, 'catchAllAction']);

return $router;
