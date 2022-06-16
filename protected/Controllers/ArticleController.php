<?php

namespace Controllers;

use Controller;
use Models\Article;

class ArticleController extends Controller
{
    public function index($num) //метод, отображающий несколько последних новостей
    {
        $news = Article::lastNews($num);
        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../public/templates/news.php');
    }

    public function showOneArticle($id)  //отображает страницу с одной новостью
    {
        $article = Article::findById($id);
        $this->view->article = $article;
        $this->view->display(__DIR__ . '/../../public/templates/article.php');
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
