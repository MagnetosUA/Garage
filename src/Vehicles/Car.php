<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Car extends Vehicle
{
    public $moveAction = "rides";

    public function musicOn()
    {
        echo $this->name . ' music switched on';
    }
}