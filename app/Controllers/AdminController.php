<?php

namespace App\Controllers;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Article;
use App\Views\ArticleView;

class AdminController
{
    private PostRepositoryInterface $postRepository;
    private mixed $adminView;
    public function __construct(PostRepositoryInterface $postRepository, mixed $adminView)
    {

        $this->adminView = $adminView;
    }






}