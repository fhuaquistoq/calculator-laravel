<?php

namespace Fhuaquistoq\CalculatorLaravel\Console\Commands;

use Fhuaquistoq\CalculatorLaravel\Number;
use Illuminate\Console\Command;

class AddCommand extends Command
{
  protected $signature = 'calculator:add {a} {b}';
  protected $description = 'Add two numbers';

  public function handle()
  {
    $a = new Number($this->argument('a'));
    $b = new Number($this->argument('b'));

    $result = $a->add($b);
    $this->info("The result of adding {$a->getValue()} and {$b->getValue()} is: {$result->getValue()}");
  }
}
