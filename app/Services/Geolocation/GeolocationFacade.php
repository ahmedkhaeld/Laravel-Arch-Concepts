<?php

namespace App\Services\Geolocation;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array search(string $location)
 * @see Geolocation
 */
class GeolocationFacade extends Facade
{
    //override the getFacadeAccessor method to return our custom class name of the service
    protected static function getFacadeAccessor(): string
    {
        return Geolocation::class;
    }


}
