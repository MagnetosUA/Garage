<?php

namespace Vehicles;

use Vehicles\Vehicle;

class Truck extends Vehicle
{
    public $moveAction = "rides";

    public function musicOn()
    {
        echo $this->name . ' music switched on';
    }

    public function bodyLift()
    {
        echo $this->name . ' lift up a body';
    }

    public function lowerBody()
    {
        echo $this->name . ' lower the body';
    }

}
