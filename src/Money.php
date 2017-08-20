<?php

namespace Money;

abstract class Money
{
    protected $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function equals(Money $object): bool
    {
        return (
            $this->amount == $object->amount &&
            get_class($this) === get_class($object)
        );
    }

    public static function dollar(int $amount)
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount)
    {
        return new Franc($amount);
    }
}