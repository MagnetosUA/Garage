<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Bike extends Vehicle
{
    public function refuel()
    {
        return "The bicycle does not consume fuel :)" . PHP_EOL;
    }
}
