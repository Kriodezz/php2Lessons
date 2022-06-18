<?php

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function access()
    {
        //проверка прав доступа
        return true;
    }

    public function action($name, $params = [])
    {
        if ($this->access()) {
            $methodName = 'action' . $name;
            $this->$methodName(...$params);
        } else {
            die('Доступ закрыт');
        }
    }
}
