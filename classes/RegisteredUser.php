<?php

include_once __DIR__ . "./User.php";

class RegisteredUser extends User
{
    private float $discount = 0.2;
    
    /**
     * Summary of __construct
     * @param string $username User's username
     * @param string $password User's password
     * @param Card $card User's credit card
     */
    public function __construct(string $username, string $password, Card $card)
    {
        parent::__construct($username, $password, $card);
    }

    /**
     * Get discounted cart's amount
     * @return float
     */
    public function getCartTotal(): float
    {
        $cartTotal = parent::getCartTotal();
        return $cartTotal -= $cartTotal * $this->discount;
    }
}
