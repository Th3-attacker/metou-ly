<?php

declare ( strict_types = 1 );

use App\Controller\HomeController;
use MamadouAlySy\Router;

require_once '../bootstrap.php';

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = strtolower( $_SERVER['REQUEST_METHOD'] );

$router = new Router();
$router->get( '/', [HomeController::class, 'index'] );
echo $router->run( $requestMethod, $requestUri )->call();
