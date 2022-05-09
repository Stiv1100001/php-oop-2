<?php

include_once __DIR__ . "./User.php";

class RegisteredUser extends User
{
    public function __construct(string $username, string $password, Card $card)
    {
        parent::__construct($username, $password, $card);
    }
}
