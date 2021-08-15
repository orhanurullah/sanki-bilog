<?php

namespace Sankii\Bilog\Providers;

use Illuminate\Support\ServiceProvider;
use Sankii\Bilog\Calculator;

class CalculateServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('calculator', function(){
            return new Calculator();
        });
    }

    public function boot(){

    }
}