<?php

namespace Fhuaquistoq\CalculatorLaravel\Exceptions;

class NoNumericException extends \Exception
{
  protected $message = "Value must be a number.";
}
