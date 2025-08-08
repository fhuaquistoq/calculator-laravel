<?php

namespace Fhuaquistoq\CalculatorLaravel;

use Fhuaquistoq\CalculatorLaravel\Exceptions\DivisionByZeroException;
use \Fhuaquistoq\CalculatorLaravel\Exceptions\NoNumericException;

class Number
{
  private $value;

  public function __construct($value)
  {
    if (!is_numeric($value)) {
      throw new NoNumericException();
    }
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function add(Number|float|int $number)
  {
    if ($number instanceof Number) {
      return new Number($this->value + $number->getValue());
    }
    return new Number($this->value + $number);
  }

  public function subtract(Number|float|int $number)
  {
    if ($number instanceof Number) {
      return new Number($this->value - $number->getValue());
    }
    return new Number($this->value - $number);
  }

  public function multiply(Number|float|int $number)
  {
    if ($number instanceof Number) {
      return new Number($this->value * $number->getValue());
    }
    return new Number($this->value * $number);
  }

  public function divide(Number|float|int $number)
  {
    if ($number instanceof Number) {
      if ($number->getValue() == 0) {
        throw new DivisionByZeroException();
      }

      return new Number($this->value / $number->getValue());
    }

    if ($number == 0) {
      throw new DivisionByZeroException();
    }

    return new Number($this->value / $number);
  }
}
