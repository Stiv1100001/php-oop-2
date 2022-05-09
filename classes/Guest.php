<?php

include_once __DIR__ . "./User.php";

class Guest extends User
{
    /**
     * Guest constructor
     * @param Card $card
     */
    public function __construct(Card $card)
    {
        parent::__construct("Guest", "Guest", $card);
    }
}
