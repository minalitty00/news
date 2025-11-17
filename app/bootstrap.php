<?php

declare(strict_types=1);

use App\Controllers\ArticleController;
use App\Models\Article;
use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$container = new League\Container\Container();

// Twig Environment
$container->add(Environment::class, function () {
    $loader = new FilesystemLoader(TEMPLATES_PATH);
    return new Environment($loader);
});

