<?php

declare(strict_types=1);

namespace App;

use League\Container\Container;
use League\Container\ReflectionContainer;

$container = new Container();

// add auto wire
$container->delegate(new ReflectionContainer());

return $container;
