<?php 

use App\Controller\HomeController;
use Spiral\Router\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('register', "/register")->controller(\App\Endpoint\Web\RegisterController::class)->defaults(['action' => 'register']);
};