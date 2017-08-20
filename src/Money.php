<?php

namespace Money;

abstract class Money
{
    protected $amount;

    abstract function currency(): string;

    public function equals(Money $object): bool
    {
        return (
            $this->amount == $object->amount &&
            get_class($this) === get_class($object)
        );
    }

    public static function dollar(int $amount)
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount)
    {
        return new Franc($amount, 'CHF');
    }
}