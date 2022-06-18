<?php

namespace Controllers;

use Controller;
use Models\Article;

class ArticleController extends Controller
{
    public function actionDefault() //метод, отображающий несколько последних новостей
    {
        $news = Article::lastNews(3);
        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../public/templates/news.php');
    }

    public function actionOne($id)  //отображает страницу с одной новостью
    {
        $article = Article::findById($id);
        $this->view->article = $article;
        $this->view->display(__DIR__ . '/../../public/templates/article.php');
    }
}
