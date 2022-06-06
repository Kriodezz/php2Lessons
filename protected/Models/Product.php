<?php
/*
 * Класс, созданный на уроке
 */
namespace Models;
use Model;
use Models\OrderableInterface;

class Product extends Model implements OrderableInterface
{
    protected static $table = 'products';

    public $tittle;
    public $price;
    public $description;
    public $image;

    public function getPrice()
    {
        return $this->price;
    }
}
