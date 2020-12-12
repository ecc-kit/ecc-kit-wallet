<?php

namespace EccKit\Wallet\Calculator;

use EccKit\Money\Money;

/**
 * Interface Calculator.
 */
interface Calculator
{
    /**
     * Addition.
     *
     * @param Money ...$monies Monies
     *
     * @return Money
     */
    public static function add(Money ...$monies): Money;
    
    /**
     * Subtraction.
     *
     * @param Money ...$monies Monies
     *
     * @return Money
     */
    public static function sub(Money ...$monies): Money;
    
    /**
     * Multiplication.
     *
     * @param Money $money Money
     * @param float $value Value
     *
     * @return Money
     */
    public static function mul(Money $money, float $value): Money;
    
    /**
     * Division.
     *
     * @param Money $money Money
     * @param float $value Value
     *
     * @return Money
     */
    public static function div(Money $money, float $value): Money;
}
