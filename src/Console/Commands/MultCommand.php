<?php

namespace Fhuaquistoq\CalculatorLaravel\Console\Commands;

use Fhuaquistoq\CalculatorLaravel\Number;
use Illuminate\Console\Command;

class MultCommand extends Command
{
  protected $signature = 'calculator:mult {a} {b}';
  protected $description = 'Multiply two numbers';

  public function handle()
  {
    $a = new Number($this->argument('a'));
    $b = new Number($this->argument('b'));

    $result = $a->multiply($b);
    $this->info("The result of multiplying {$a->getValue()} and {$b->getValue()} is: {$result->getValue()}");
  }
}
