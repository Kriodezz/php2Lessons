<?php

namespace Controllers;

use Controller;
use Models\Product;

class ProductController extends Controller
{
    protected function actionDefault()
    {
        $this->view->products =  Product::findAll();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    protected function actionOne($id)
    {
        $this->view->product =  Product::findById($id);
        $this->view->display(__DIR__ . '/../../templates/product.php');
    }
}
