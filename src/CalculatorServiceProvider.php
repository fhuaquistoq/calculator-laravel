<?php

namespace Fhuaquistoq\CalculatorLaravel;

use Illuminate\Support\ServiceProvider;
use Fhuaquistoq\CalculatorLaravel\Calculator;

class CalculatorServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->singleton('calculator', function ($app) {
      return new Calculator();
    });
  }

  public function boot() {}
}
