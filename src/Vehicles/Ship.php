<?php

namespace Vehicles;

use Vehicles\Vehicle;

class Ship extends Vehicle
{
    public $moveAction = "swimming";
    public $stopAction = "moored";

    public function liftAnchor()
    {
        echo $this->name . ' lift anchor';
    }

    public function lowerAnchor()
    {
        echo $this->name . ' lower the anchor';
    }
}