<?php

require_once __DIR__ . '/../Model.php';

class User extends Model
{
    protected static $table = 'users';

    public $email;
    public $password;

}
