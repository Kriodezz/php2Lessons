<?php

class Db
{
    protected \PDO $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'root', '');
    }

    public function query($sql, $class = 'stdClass', $params = []): ?array
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($query, $params = []): bool //здесь пока не стал заморачиваться
    {
        $sth = $this->dbh->prepare($query);
        return $sth->execute($params);
    }
}
