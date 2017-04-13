<?php

namespace Ampersa\SafeBrowsing\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class SafeBrowsing extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'safebrowsing';
    }
}
