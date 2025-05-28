<?php

use Agostech\CrudMvcPoc\Controller\HomeController;

$router->get('/', function () {
    $controller = new HomeController();
    $controller->index();
});
