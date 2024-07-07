<?php

use FastRoute\RouteCollector;

require '../vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {

  $r->addRoute('GET', '/', ['HomeController', 'index']);

});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        dd('404 Not Found');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        dd('405 Method Not Allowed');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $controller = 'App\controllers\\'.$handler[0];
        call_user_func_array([new $controller, $handler[1]], $vars);
        break;
}
