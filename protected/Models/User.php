<?php
/*
 * Класс, созданный на уроке
 */

namespace Models;

use Model;

class User extends Model
{
    protected static $table = 'users';

    protected function validate_email($value)
    {
        if (strpos($value, '@') === false) {
            die('неверный емейл');
        }
    }
}
