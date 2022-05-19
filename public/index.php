<?php
var_dump($_POST);

require_once __DIR__ . '/../protected/autoload.php';

use controllers\ArticleController;

$article = new ArticleController();

if (!empty($_POST)) {
    switch ($_POST['submit']) {
        case 'insert':
            $article->add();
            break;
        case 'update':
            $article->edit($_GET['edit']);
            break;
        case 'delete':
            $article->delete($_GET['delete']);
            break;
    }
}

if (!empty($_GET)) {
    $article->showOneArticle($_GET['id']);
} else {
    $article->index(3);
}
