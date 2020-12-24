<?php

use App\Controller\UserController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
  $routes->add('index', '/')
    ->controller([UserController::class, 'index'])
    ->methods(['GET', 'HEAD']);
};
