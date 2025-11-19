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

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$router = new League\Route\Router;

// map a route
$router->map('GET', '/', function (ServerRequestInterface $request): ResponseInterface {
    $response = new Laminas\Diactoros\Response;
    $response->getBody()->write('<h1>Hello, World!</h1>');
    return $response;
});

$router->get('/', 'Acme\Controller::getMethod');
$response = $router->dispatch($request);
// send the response to the browser
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