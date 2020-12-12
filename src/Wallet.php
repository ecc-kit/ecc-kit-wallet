<?php

namespace EccKit\Wallet;

use EccKit\Wallet\Calculator\Calculator;
use EccKit\Money\Money;
use EccKit\Exchanger\Exchanger;

/**
 * Class Wallet.
 */
class Wallet
{
    /** @var Calculator Calculator */
    protected Calculator $calculator;
    /** @var Exchanger Exchanger */
    protected Exchanger $exchanger;
    
    /**
     * Wallet constructor.
     *
     * @param Calculator $calculator Calculator
     * @param Exchanger  $exchanger  Exchanger
     */
    public function __construct(Calculator $calculator, Exchanger $exchanger)
    {
        $this->calculator = $calculator;
        $this->exchanger = $exchanger;
    }
}
