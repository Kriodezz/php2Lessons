<?php

use Models\Author;

trait MagicTrait
{
    protected array $data = [];

    public function __set($name, $value)
    {
        $method = 'validate_' . $name;
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
        $this->data[$name] = $value; //добавляет значение в массив $data
        //$this->$name = $value;    // добавляет свойство объекту
    }

    public function __get($name)
    {
//        if ($name === 'author') {
//            $author = Author::findById($this->author_id);
//
//            if ($author === false) {
//                return null;
//            } else {
//                return $author;
//            }
//        } else {
        return $this->data[$name]; }
//    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
}
