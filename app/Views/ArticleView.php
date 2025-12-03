<?php

namespace App\Views;
use Twig\Environment;

class ArticleView
{
    public Environment $twig;
    public function __construct(Environment $twig )
    {
        $this->twig = $twig;
    }

    public function renderTagsList($tags): string
    {
        return $this->twig->render("articles/tags.html.twig", ['tags' => $tags]);

        /**$html ='<ul>';
        foreach ($tags as $tag) {
            $html .='<li>'.$tag.'</li>';
        }
        $html .='</ul>';
        return $html;**/
    }
    public function renderHomePage($posts): string
    {
        return $this->twig->render('home-page.twig', ['posts' => $posts,'title' => "Home"]);

        /**return include_once TEMPLATE_DIR.'/index.html;**/
    }

    public function article($post): string
    {
        return $this->twig->render('front/pages/single-page.html.twig',['post' => $post]);
    }
    public function error404(): string
    {
        return $this->twig->render('front/pages/page-404.html.twig');
    }




    public function renderArticlePage($articles): string
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