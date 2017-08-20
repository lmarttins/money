<?php

namespace Money;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        parent::__construct($amount);
    }

    public function times(int $multiplier)
    {
        return Money::franc($this->amount * $multiplier);
    }
}