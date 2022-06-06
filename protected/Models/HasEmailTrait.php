<?php

namespace Models;

trait HasEmailTrait
{
    public string $email;

    public function getEmail()
    {
        return $this->email;
    }
}
