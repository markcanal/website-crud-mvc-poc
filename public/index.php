<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap/database.php';

use Bramus\Router\Router;
// Create router instance
$router = new Router();
// Load routes from root folder web.php
require __DIR__ . '/../web.php';
// Run router
$router->run();
