<?php

namespace Money;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        parent::__construct($amount);
    }

    public function times(int $multiplier): Dollar
    {
        return Money::dollar($this->amount * $multiplier);
    }
}