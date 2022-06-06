<?php

namespace Controllers;

use Models\Article;

class ArticleController
{
    public function index($num) //метод, отображающий несколько последних новостей
    {
        $news = Article::lastNews($num);
        $view = new \View();
        $view->news = $news;
        $view->display(__DIR__ . '/../../public/templates/news.php');

    }

    public function showOneArticle($id)  //отображает страницу с одной новостью
    {
        $article = Article::findById($id);
        $view = new \View();
        $view->article = $article;
        $view->display(__DIR__ . '/../../public/templates/article.php');
    }

    public function add() //добавляет новую новость
    {
        $article = new Article();
        $article->tittle = $_POST['tittle'];
        $article->content = $_POST['content'];
        $article->save();
        header('Location: /index.php');
    }

    public function edit($id) //редактирует имеющуюся запись
    {
        $article = Article::findById($id);
        $article->tittle = $_POST['tittle'];
        $article->content = $_POST['content'];
        $article->save();
        header('Location: /index.php');

    }

    public function delete($id) //удаляет имеющуюся запись
    {
        $article = Article::findById($id);
        $article->delete();
        header('Location: /index.php');

    }
}
