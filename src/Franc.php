<?php

namespace Money;

class Franc extends Money
{
    private $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier)
    {
        return Money::franc($this->amount * $multiplier);
    }
}