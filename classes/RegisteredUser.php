<?php

include_once __DIR__ . "./User.php";

class RegisteredUser extends User
{
    private float $discount = 0.2;
    
    public function __construct(string $username, string $password, Card $card)
    {
        parent::__construct($username, $password, $card);
    }

    public function getCartTotal()
    {
        $cartTotal = parent::getCartTotal();
        return $cartTotal -= $cartTotal * $this->discount;
    }
}
