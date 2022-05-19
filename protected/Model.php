<?php

/*
 * Класс родитель для классов моделей
 */

abstract class Model
{
    protected static $table = null;

    public $id;

    //Поиск всех новостей
    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table . ';';
        $db = new \Db();
        return $db->query($sql, [], static::class);
    }

    //Поиск новости по id
    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id = :id;';
        $db = new \Db();
        $data = $db->query($sql, [':id' => $id], static::class);
        if (null == $data) {
            return false;
        } else {
            return $data[0];
        }
    }

    //Метод, который сохраняет, либо обновляет запись
    public function save(): void
    {
        $data = get_object_vars($this);

        if (null === $this->id) {
            $this->insert($data);
        } else {
            $this->update($data);
        }
    }

    //Добавляет новую запись
    public function insert($data): void
    {
        $cols = [];
        $paramsName = [];
        $values = [];
        foreach ($data as $key => $value) {
            if ('id' == $key) {
                continue;
            }
            $cols[] = $key;
            $paramsName[] = ':' . $key;
            $values[':' . $key] = $value;
        }

        $sql = 'INSERT INTO ' . static::$table . '
        (' . implode(', ', $cols) . ') 
        VALUES (' . implode(', ', $paramsName) . ')';

        $db = new \Db();
        $db->execute($sql, $values);
        $this->id = $db->lastInsertId();
    }

    //Обновляет существующую запись
    public function update($data): void
    {
        $params = [];
        $values = [];
        foreach ($data as $key => $value) {
            if ('id' == $key) {
                continue;
            }
            $params[] = $key . ' = :' . $key;
            $values[':' . $key] = $value;
        }

        $sql = 'UPDATE ' . static::$table . ' 
        SET ' . implode(', ', $params) . '
        WHERE id = ' . $this->id;
        $db = new \Db();
        $db->execute($sql, $values);
    }

    //Удаляет запись
    public function delete(): void
    {
        $db = new \Db();
        $db->query(
            'DELETE FROM ' . static::$table . ' WHERE id = :id',
            [':id' => $this->id]
        );
        $this->id = null;
    }
}
