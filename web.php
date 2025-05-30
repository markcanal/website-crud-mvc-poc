<?php

use Agostech\CrudMvcPoc\Controller\AboutController;
use Agostech\CrudMvcPoc\Controller\HomeController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/', [
    '_controller' => [HomeController::class, 'index']
]));

$routes->add('about', new Route('/about', [
    '_controller' => [AboutController::class, 'index']
]));

return $routes;
