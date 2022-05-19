<?php

/*
 * Объект этого класса при создании читает и сохраняет в себе файл конфигурации.
 */

class Config
{
    //Свойство для реализации Сингл тон. Хранит в себе объект класса
    protected static $instance;

    protected array $data;

    private function __construct()
    {
        $data = require __DIR__ . '/setting.php';
        $this->data = $data;
    }

    //Реализация Сингл тон
    // Создание объекта - $config = Config::getInstance();
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getData(): array
    {
        return $this->data;
    }

}
