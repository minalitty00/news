<?php

declare(strict_types=1);

use App\Controllers\ArticleController;
use App\Interfaces\PostRepositoryInterface;
use App\Models\Article;
use App\Repositories\JsonPostRepository;
use App\Views\ArticleView;
use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;
use Psr\Container\ContainerInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$container = new League\Container\Container();

// Twig Environment
$container->add(Environment::class, function () {
    $loader = new FilesystemLoader(TEMPLATES_PATH);
    return new Environment($loader);
});
$container->add(ArticleView::class)
    ->addArguments([Environment::class]);



$container->add(PostRepositoryInterface::class, JsonPostRepository::class);

$container->add(AdminController::class)
    ->addArgument($container->get(PostRepositoryInterface::class))
    ->addArgument($container->get(AdminView::class));

