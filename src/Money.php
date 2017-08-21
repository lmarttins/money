<?php

namespace Money;

abstract class Money
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    /**
     * @param  Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        return (
            $this->amount == $object->amount &&
            get_class($this) === get_class($object)
        );
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * @param  int $amount
     * @return Dollar
     */
    public static function dollar(int $amount)
    {
        return new Dollar($amount, 'USD');
    }

    /**
     * @param  int $amount
     * @return Franc
     */
    public static function franc(int $amount)
    {
        return new Franc($amount, 'CHF');
    }
}