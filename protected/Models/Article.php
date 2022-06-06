<?php

namespace Models;

use Model;

class Article extends Model
{
    protected static $table = 'articles';

    public string $tittle;
    public string $content;
    public int $author_id;
    public ?Author $author;

    public function __construct()
    {
        if ($this->author_id === 0) {
            $this->author = null;
        } else {
            $this->author = Author::findById($this->author_id);
        }
    }

    public static function lastNews($num)  //метод, отображающий несколько последних новостей
    {
        $sql = 'SELECT * FROM ' . self::$table . '
                ORDER BY id DESC LIMIT ' . $num . ';';
        $db = new \Db();
        return $db->query($sql, [],self::class);
    }
}
