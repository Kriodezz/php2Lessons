<?php

namespace Models;

trait HasEmailTrait
{
    public $email;

    public function getEmail()
    {
        return $this->email;
    }
}