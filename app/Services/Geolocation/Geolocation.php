<?php

namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation
{
    public function __construct(private readonly Map $map, private readonly Satellite $satellite)
    {
        // ...
    }

    /**
     * @param string $address the user wants to search for
     * @return void
     */
    public function search(string $address): array
    {
        $locationInfo = $this->map->findAddress($address);
        return $this->satellite->pinpoint($locationInfo);
    }


}
