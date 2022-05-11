<?php

require_once __DIR__ . '/../Model.php';

class Article extends Model
{
    protected static $table = 'articles';

    public string $tittle;
    public string $content;

    public static function lastNews($num)
    {
        $sql = 'SELECT * FROM ' . self::$table . '
                ORDER BY id DESC LIMIT ' . $num . ';';
        $db = new Db();
        return $db->query($sql, self::class);
    }

}
