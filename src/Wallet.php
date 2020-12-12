<?php

namespace EccKit\Wallet;

use EccKit\Money\Collection\MoneyCollection;
use EccKit\Money\Currency;
use EccKit\Money\Money;
use EccKit\Wallet\Calculator\Calculator;
use EccKit\Exchanger\Exchanger;

/**
 * Class Wallet.
 */
class Wallet
{
    /** @var Currency Currency */
    protected Currency $currency;
    /** @var Calculator Calculator */
    protected Calculator $calculator;
    /** @var Exchanger Exchanger */
    protected Exchanger $exchanger;
    /** @var array Money */
    protected array $money = [];
    
    /**
     * Wallet constructor.
     *
     * @param Currency   $currency   Base Currency
     * @param Calculator $calculator Calculator
     * @param Exchanger  $exchanger  Exchanger
     */
    public function __construct(
        Currency $currency,
        Calculator $calculator,
        Exchanger $exchanger
    ) {
        $this->currency = $currency;
        $this->calculator = $calculator;
        $this->exchanger = $exchanger;
    }
    
    /**
     * MoneyCollection.
     *
     * @return MoneyCollection
     */
    public function getMoneyCollection(): MoneyCollection
    {
        return new MoneyCollection($this->money);
    }
    
    /**
     * Addition.
     *
     * @param Money $money
     *
     * @return Wallet
     */
    public function add(Money $money): self
    {
        /** @todo: implement this */
    }
    
    /**
     * Subtraction.
     *
     * @param Money $money
     *
     * @return Wallet
     */
    public function sub(Money $money): self
    {
        /** @todo: implement this */
    }
    
    /**
     * Multiplication.
     *
     * @param float $value
     *
     * @return Wallet
     */
    public function mul(float $value): self
    {
        /** @todo: implement this */
    }
    
    /**
     * Division.
     *
     * @param float $value
     *
     * @return Wallet
     */
    public function div(float $value): self
    {
        /** @todo: implement this */
    }
    
    /**
     * @param null|Currency $currency
     *
     * @return Money
     */
    public function getPrice(?Currency $currency = null): Money
    {
        /** @todo: implement this */
    }
}
