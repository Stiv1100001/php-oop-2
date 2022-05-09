<?php

/**
 * Class that represent a Debit/Credit card
 */
class Card
{
    private string $number;
    private string $owner;
    private DateTime $expireDate;
    private string $cvc;

    /**
     * Summary of __constructor
     * @param string $number Card number
     * @param string $owner Card owner
     * @param int $month Expire's month
     * @param int $year Expire's year
     * @param string $cvc CVC code
     */
    public function __constructor(string $number, string $owner, int $month, int $year, string $cvc): void
    {
        if (strlen($number) != 16 || !is_numeric($number)) {
            throw new TypeError("Card number is not numeric");
        }

        if (strlen($cvc) != 3 || !is_numeric($cvc)) {
            throw new TypeError("CVC is not correct");
        }
          
        $this->number = $number;
        $this->owner = $owner;
        $this->cvc = $cvc;

        $this->expireDate = date("YY-mm-dd", "$year-$month-01");
    }

    /**
     * Get Card number
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     *  Geet Card owner
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     *  Get Card expire date
     * @return DateTime
     */
    public function getExpireDate(): DateTime
    {
        return $this->expireDate;
    }

    /**
     * Get Card CVC
     * @return string
     */
    public function getCvc(): string
    {
        return $this->cvc;
    }

    /**
     * Check if Card is expired
     * @return bool
     */
    public function isExpired(): bool
    {
        return $this->expireDate < time();
    }
}
