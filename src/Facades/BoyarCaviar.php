<?php

namespace Kwidoo\BoyarCaviar\Facades;

use Illuminate\Support\Facades\Facade;

class BoyarCaviar extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'boyarcaviar';
    }
}
