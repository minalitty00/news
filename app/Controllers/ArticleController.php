<?php

namespace App\Controllers;

use App\Models\Article;
use App\Views\ArticleView;
use App\Core\FileManager;

class ArticleController
{
    private  $contentDir;
    private   $model;
    private   $view;
    public function __construct()
    {
        $this->model = new Article();
        $this->view = new ArticleView();
        $this->contentDir = __DIR__ . "/../../../public/content";



    }
    public function getAllTegs()
    {
       $tags = $this->model->allTegs();
       echo $this->view->renderTegsList($tags);

    }

    public function homePage()
    {
        echo $this->view->renderHomePage();
    }

    public function articlePage()
    {
        $articles = $this->model->allArticles();
        $this->view->renderArticlePage($articles);
    }

}