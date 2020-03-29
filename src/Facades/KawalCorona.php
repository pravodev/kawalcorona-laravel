<?php

namespace Pravodev\KawalCoronaLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class KawalCorona extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'kawalcorona';
    }
}
