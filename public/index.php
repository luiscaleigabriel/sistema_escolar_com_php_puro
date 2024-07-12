<?php

use App\controllers\HomeController;
use FastRoute\RouteCollector;

require '../vendor/autoload.php';

session_start();

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {

  $r->addRoute('GET', '/', [HomeController::class, 'index']);

});

require './router.php';