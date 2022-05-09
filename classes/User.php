<?php

require_once __DIR__ . "./Card.php";

abstract class User
{
    protected string $username;
    protected string $password;
    protected Card $card;
    protected $cart = [];

    public function __construct(string $username, string $password, Card $card = null)
    {
        $this->username = $username;
        $this->password = $password;

        if ($card) {
            $this->card = $card;
        }
    }

    /**
     * Get User's username
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * get user's card
     * @return Card
     */
    public function getCard(): Card
    {
        return $this->card;
    }
}
