<?php

require_once __DIR__ . '/../protected/autoload.php';

//use controllers\ArticleController;
//
//$article = new ArticleController();
//
//if (!empty($_POST)) {
//    switch ($_POST['submit']) {
//        case 'insert':
//            $article->add();
//            break;
//        case 'update':
//            $article->edit($_GET['edit']);
//            break;
//        case 'delete':
//            $article->delete($_GET['delete']);
//            break;
//    }
//}
//
//if (!empty($_GET)) {
//    $article->showOneArticle($_GET['id']);
//} else {
//    $article->index(3);
//}

/*
 * Код урока 3 *************************
 */

/*
$data = \Models\Product::findAll();
$view = new View();
$view->products = $data;
$view->display(__DIR__ . '/../templates/index.php');
*/

/*
$user = new \Models\User();
$user->email = 'test@test.com';
$user->password = 'qwerty';
$user->save();
var_dump($user);
*/

/*
 * Код урока 4 *************************
 */

//$view = new View();
//$view->products =  \Models\Product::findAll();
//$view->comments =  [];
//echo count($view); //без интерфейса Countable ф-ция каунт с объектами не работает
//echo $view->count(); //ф-ция каунт без интерфейса Countable

$controller = new \Controllers\ProductController();
$controller->action('Default');
