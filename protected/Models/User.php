<?php
/*
 * Класс, созданный на уроке
 */
namespace Models;
use Model;

class User extends Model
{

    use HasEmailTrait;

    protected static $table = 'users';

    public $password;

}
