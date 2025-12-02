<?php

namespace App\Controllers;
use App\Interfaces\PostRepositoryInterface;
use App\Views\ArticleView;
use App\Views\FrontView;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class FrontController
{
    private PostRepositoryInterface $postRepository;
    private ArticleView $front_view;

    public function __construct( PostRepositoryInterface $repository, ArticleView $frontview)
    {
        $this->postRepository = $repository;
        $this->front_view = $frontview;
    }


    public function responseWrapper(string $str):ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write($str);
        return $response;

    }

    public function index(ServerRequestInterface $request): ResponseInterface
    {
        $posts = $this->postRepository->all();
        $html = $this->front_view->renderHomePage($posts);
        return $this->responseWrapper($html);
    }

    public function show(ServerRequestInterface $request): ResponseInterface
    {

    }




}