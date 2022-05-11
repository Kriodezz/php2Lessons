<?php

abstract class Model
{
    protected static $table = null;

    public $id;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table . ';';
        $db = new Db();
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id = :id;';
        $db = new Db();
        $data = $db->query($sql,static::class, [':id' => $id]);
        if (null == $data) {
            return false;
        } else {
            return $data[0];
        }

    }

}
