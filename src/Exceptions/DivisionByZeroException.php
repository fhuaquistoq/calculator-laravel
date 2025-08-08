<?php

namespace Fhuaquistoq\CalculatorLaravel\Exceptions;

class DivisionByZeroException extends \Exception
{
    protected $message = "Division by zero is not allowed.";
}
