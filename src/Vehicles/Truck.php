<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Truck extends Vehicle
{
    public $moveAction = "rides";
    public $fuel = 'diesel oil';

    public function musicOn()
    {
        return $this->name . ' music switched on' . PHP_EOL;
    }

    public function bodyLift()
    {
        return $this->name . ' lift up a body' . PHP_EOL;
    }

    public function lowerBody()
    {
        return $this->name . ' lower the body' . PHP_EOL;
    }

    public function initMethods()
    {
        echo $this->musicOn();
        echo $this->bodyLift();
        echo $this->lowerBody();
        parent::initMethods();
    }

}

