<?php

namespace LP\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadViewsFrom( __DIR__. '/views', 'calculator');
    }
    public function boot(): void
    {
        include __DIR__.'/routes.php'; 
    }
}
