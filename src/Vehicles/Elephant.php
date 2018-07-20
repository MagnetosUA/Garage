<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Elephant extends Vehicle
{
    public function refuel()
    {
        echo 'The elephant eats grass' . PHP_EOL;
    }
}