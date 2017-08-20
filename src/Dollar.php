<?php

namespace Money;

class Dollar extends Money
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

    public function times(int $multiplier): Dollar
    {
        return Money::dollar($this->amount * $multiplier);
    }
}