<?php

namespace Models;

use Model;

class Article extends Model
{
    protected static $table = 'articles';

    public string $tittle;
    public string $content;
    public int $author_id;

//    public function __set($name, $value)
//    {
//        parent::__set($name, $value);
//        if ($name === 'author') {
//            $author = Author::findById($this->author_id);
//            if (empty($author)) {
//                $this->data[$name] = null;
//            } else {
//                $this->data[$name] = $author;
//            }
//        }
//    }

    public static function lastNews($num)  //метод, отображающий несколько последних новостей
    {
        $sql = 'SELECT * FROM ' . self::$table . '
                ORDER BY id DESC LIMIT ' . $num . ';';
        $db = new \Db();
        return $db->query($sql, [],self::class);
    }
}
