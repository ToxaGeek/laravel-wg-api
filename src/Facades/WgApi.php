<?php

namespace ToxaGeek\LaravelWgApi\Facades;

use Illuminate\Support\Facades\Facade;

class WgApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wgApi';
    }
}
