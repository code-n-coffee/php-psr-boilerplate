<?php

declare(strict_types=1);

namespace App;

use App\Controller\IndexController;
use App\Service\HelloWorldService;
use League\Container\Container;

$container = new Container();

$container->add(IndexController::class)->addArgument(HelloWorldService::class);
$container->add(HelloWorldService::class);

return $container;
