<?php

use App\Controller\PostController;
use App\Controller\UserController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('index', '/')
        ->controller([UserController::class, 'index'])
        ->methods(['GET', 'HEAD'])
    ;

    $routes->add('post:index', '/post')
        ->controller([PostController::class, 'index'])
        ->methods(['GET'])
    ;

    $routes->add('post:create', '/post')
        ->controller([PostController::class, 'create'])
        ->methods(['POST'])
    ;
};
