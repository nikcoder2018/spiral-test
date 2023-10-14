<?php 

use App\Controller\HomeController;
use Spiral\Router\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add(name: 'home.show', pattern: '/home/<id:int>')
        ->methods(methods: ['GET'])
        ->action(HomeController::class, 'show');
};