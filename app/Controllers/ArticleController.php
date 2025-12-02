<?php

namespace App\Controllers;

use App\Models\Article;
use App\Views\ArticleView;

class ArticleController
{
    private  $contentDir;
    private   $model;
    private   $view;
    public function __construct()
    {
        $this->model = new Article();
        $this->contentDir = __DIR__ . "/../../../public/content";
    }


    public function getAllTags(): void
    {
       $tags = $this->model->allTags();
       echo $this->view->renderTagsList($tags);

    }

    public function homePage(): void
    {
        echo $this->view->renderHomePage();
    }

    public function articlePage(): void
    {
        $articles = $this->model->allArticles();
        $this->view->renderArticlePage($articles);
    }

}