<?php

require_once __DIR__ . '/../protected/Db.php';
require_once __DIR__ . '/../protected/Models/Product.php';
require_once __DIR__ . '/../protected/Models/User.php';
require_once __DIR__ . '/../controllers/ArticleController.php';

$article = new ArticleController();

if (!empty($_GET)) {
    $article->showOneArticle($_GET['id']);
} else {
    $article->index(3);
}
