<?php

namespace Fhuaquistoq\CalculatorLaravel;

use Fhuaquistoq\CalculatorLaravel\Exceptions\DivisionByZeroException;
use Fhuaquistoq\CalculatorLaravel\Number;

class Calculator
{
  public static function add(Number|float|int $a, Number|float|int $b)
  {
    if ($a instanceof Number) {
      return $a->add($b);
    }
    if ($b instanceof Number) {
      return $b->add($a);
    }

    return new Number($a + $b);
  }

  public static function subtract(Number|float|int $a, Number|float|int $b)
  {
    if ($a instanceof Number) {
      return $a->subtract($b);
    }
    if ($b instanceof Number) {
      return new Number($a - $b->getValue());
    }

    return new Number($a - $b);
  }

  public static function multiply(Number|float|int $a, Number|float|int $b)
  {
    if ($a instanceof Number) {
      return $a->multiply($b);
    }
    if ($b instanceof Number) {
      return $b->multiply($a);
    }

    return new Number($a * $b);
  }

  public static function divide(Number|float|int $a, Number|float|int $b)
  {
    if (($b instanceof Number && $b->getValue() == 0) || $b == 0) {
      throw new DivisionByZeroException();
    }

    if ($a instanceof Number) {
      return $a->divide($b);
    }

    if ($b instanceof Number) {
      return new Number($a / $b->getValue());
    }

    return new Number($a / $b);
  }
}
