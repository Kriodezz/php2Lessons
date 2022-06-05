<?php

trait MagicTrait
{

    protected array $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value; //добавляет значение в массив $data
        //$this->$name = $value;    // добавляет свойство объекту
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
}