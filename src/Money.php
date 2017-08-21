<?php

namespace Money;

class Money
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
            $this->currency() === $object->currency()
        );
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param  int $amount
     * @return Money
     */
    public static function dollar(int $amount)
    {
        return new Money($amount, 'USD');
    }

    /**
     * @param  int $amount
     * @return Money
     */
    public static function franc(int $amount)
    {
        return new Money($amount, 'CHF');
    }

    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
    }
}