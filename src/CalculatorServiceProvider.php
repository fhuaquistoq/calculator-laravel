<?php

namespace Fhuaquistoq\CalculatorLaravel;

use Illuminate\Support\ServiceProvider;
use Fhuaquistoq\CalculatorLaravel\Calculator;
use Fhuaquistoq\CalculatorLaravel\Console\Commands\AddCommand;
use Fhuaquistoq\CalculatorLaravel\Console\Commands\DivCommand;
use Fhuaquistoq\CalculatorLaravel\Console\Commands\MultCommand;
use Fhuaquistoq\CalculatorLaravel\Console\Commands\SubCommand;

class CalculatorServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->singleton('calculator', function ($app) {
      return new Calculator();
    });
  }

  public function boot()
  {
    if ($this->app->runningInConsole()) {
      $this->commands([
        AddCommand::class,
        SubCommand::class,
        MultCommand::class,
        DivCommand::class,
      ]);
    }
  }
}
