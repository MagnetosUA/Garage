<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Helicopter extends Vehicle
{
    public $fuel = 'kerosene';
    public $moveAction = "flying";
    public $stopAction = "landing";
}
