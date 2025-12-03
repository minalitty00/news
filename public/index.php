<?php
require_once "../vendor/autoload.php";




$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

require_once '../config/settings.php';
$router = require (ROOT_PATH.'/app/bootstrap.php');

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

// map a route
$router->map('GET', '/', 'App\Controllers\FrontController::index');
$router->get('/post/{id}', 'App\Controllers\FrontController::show');

$response = $router->dispatch($request);

(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);




