<?php

namespace Fhuaquistoq\CalculatorLaravel\Console\Commands;

use Fhuaquistoq\CalculatorLaravel\Number;
use Illuminate\Console\Command;

class SubCommand extends Command
{
  protected $signature = 'calculator:sub {a} {b}';
  protected $description = 'Subtract two numbers';

  public function handle()
  {
    $a = new Number($this->argument('a'));
    $b = new Number($this->argument('b'));

    $result = $a->subtract($b);
    $this->info("The result of subtracting {$b->getValue()} from {$a->getValue()} is: {$result->getValue()}");
  }
}
