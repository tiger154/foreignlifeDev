<?php

namespace Flc\Regions\Facades;

use Illuminate\Support\Facades\Facade;

class Regions extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelregions';
    }
}
