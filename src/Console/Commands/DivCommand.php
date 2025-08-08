<?php

namespace Fhuaquistoq\CalculatorLaravel\Console\Commands;

use Fhuaquistoq\CalculatorLaravel\Number;
use Illuminate\Console\Command;

class DivCommand extends Command
{
  protected $signature = 'calculator:div {a} {b}';
  protected $description = 'Divide two numbers';

  public function handle()
  {
    $a = new Number($this->argument('a'));
    $b = new Number($this->argument('b'));

    $result = $a->divide($b);
    $this->info("The result of dividing {$a->getValue()} by {$b->getValue()} is: {$result->getValue()}");
  }
}
