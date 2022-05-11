<?php

require_once __DIR__ . '/../Model.php';

class Product extends Model
{
    protected static $table = 'products';

    public $tittle;
    public $price;
    public $description;
    public $image;

}
