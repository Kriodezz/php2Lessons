<?php

namespace Controllers;

use Controller;
use Models\Article;

class AdminController extends Controller
{
    public function actionDefault()
    {
        $news = Article::lastNews();
        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../public/templates/news.php');
    }

    public function actionAdd() //добавляет новую новость
    {
        $article = new Article();
        $article->tittle = $_POST['tittle'];
        $article->content = $_POST['content'];
        $article->save();
        header('Location: /index.php');
    }

    public function actionEdit($id) //редактирует имеющуюся запись
    {
        $article = Article::findById($id);
        $article->tittle = $_POST['tittle'];
        $article->content = $_POST['content'];
        $article->save();
        header('Location: /index.php');
    }

    public function actionDelete($id) //удаляет имеющуюся запись
    {
        $article = Article::findById($id);
        $article->delete();
        header('Location: /index.php');
    }
}
