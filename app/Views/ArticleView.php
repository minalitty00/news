<?php

namespace App\Views;
use Twig\Environment;

class ArticleView
{
    public Environment $twig;
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }





    public function renderTegsList($tags)
    {
        $html ='<ul>';
        foreach ($tags as $tag) {
            $html .='<li>'.$tag.'</li>';
        }
        $html .='</ul>';
        return $html;
    }
    public function renderHomePage()
    {
        return include_once TEMPLATE_DIR.'/index.html';
    }

    public function renderArticlePage($articles)
    {
        $html='';
        foreach ($articles as $article) {
            $html .='<div class="echo-hero-baner">
                                <div class="echo-inner-img-ct-1  img-transition-scale">
                                    <a href="#"><img src="'.$article["image"].'" class="echo-ct-style-1-banner-images"></a>
                                </div>
                                <div class="echo-hero-baner-text-heading-info-ct-1">
                                    <h2 class="echo-hero-title text-capitalize font-weight-bold"><a href="#" class="title-hover">'.$article["title"].'</a></h2>

                                    <hr>
                                    <p class="echo-hero-discription">'.$article["description"].'</p>
                                </div>
                            </div>';
        }
        return include_once TEMPLATES_PATH.'/category.php';

    }

}