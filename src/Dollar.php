<?php

namespace Money;

class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $object)
    {
        return $this->amount == $object->amount;
    }
}