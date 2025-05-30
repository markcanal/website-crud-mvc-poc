<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

$start = microtime(true);
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap/database.php';
$routes = require __DIR__ . '/../web.php';
$cache = __DIR__ .  '/../../cache';
$views = __DIR__ . '/../../views';

$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes, $context);

try {
    $parameters = $matcher->match($request->getPathInfo());

    [$controllerClass, $method] = $parameters['_controller'];
    unset($parameters['_controller'], $parameters['_route']);

    // Instantiate the controller
    $controller = new $controllerClass();

    // Call the controller method with any matched parameters
    call_user_func_array([$controller, $method], $parameters);
} catch (\Symfony\Component\Routing\Exception\ResourceNotFoundException $e) {
    http_response_code(404);
    echo '404 - Page not found';
} catch (Exception $e) {
    http_response_code(500);
    echo '500 - Internal Server Error: ' . $e->getMessage();
}
$end = microtime(true);
echo "<!-- Page generated in " . round($end - $start, 4) . " seconds -->";
