<?php

namespace Sankii\Bilog\Facades;

use Illuminate\Support\Facades\Facade;

class CalculatorFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'calculator';
    }
}