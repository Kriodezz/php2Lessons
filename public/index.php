<?php

require_once __DIR__ . '/../protected/Db.php';
require_once __DIR__ . '/../protected/Models/Product.php';
require_once __DIR__ . '/../protected/Models/User.php';
require_once __DIR__ . '/../controllers/ArticleController.php';

if (!empty($_GET)) {
    $oneArticle = new ArticleController();
    $oneArticle->showOneArticle($_GET['id']);
} else {
    $listNews = new ArticleController();
    $listNews->index(3);
}

