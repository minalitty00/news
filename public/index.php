<?php
require_once "../vendor/autoload.php";

use App\Controllers\ArticleController;
use App\Core\Helper;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


 include_once __DIR__ . "/../config/settings.php"; // настройки приложения

$h = new Helper();
$articles = new ArticleController();

require_once '../config/settings.php';
$router = require (ROOT_PATH.'/app/bootstrap.php');

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);



// map a route
$$router->map('GET', '/', 'App\Controllers\FrontController::index');
$router->get('/post/{id}', 'App\Controllers\FrontController::show');

$response = $router->dispatch($request);
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);




$uri = $_SERVER['REQUEST_URI'];


switch ($uri) {
    case '/':
        $articles->homePage();
        break;
    case '/articles':
       $articles->articlePage();
        break;
    case '/tags':
        $articles->getAllTegs();
        break;
    case '/contact':
        echo 'contact';
        break;
    default:
        echo '404 error';

}