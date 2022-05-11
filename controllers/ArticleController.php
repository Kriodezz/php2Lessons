<?php

require_once __DIR__ . '/../protected/Model.php';
require_once __DIR__ . '/../protected/Models/Article.php';


class ArticleController
{
    public function index($num)
    {
        $news = Article::lastNews($num);

        include __DIR__ . '/../public/templates/news.php';
    }

    public function showOneArticle($id)
    {
        $article = Article::findById($id);

        include __DIR__ . '/../public/templates/article.php';
    }
}

