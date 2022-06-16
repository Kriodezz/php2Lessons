<?php

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($name, $params = [])
    {
        $methodName = 'action' . $name;
        $this->$methodName(...$params);
    }
}
