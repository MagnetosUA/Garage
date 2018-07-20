<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Truck extends Vehicle
{
    public $moveAction = "rides";
    public $fuel = 'diesel oil';

    public function musicOn()
    {
        echo $this->name . ' music switched on' . PHP_EOL;
    }

    public function bodyLift()
    {
        echo $this->name . ' lift up a body' . PHP_EOL;
    }

    public function lowerBody()
    {
        echo $this->name . ' lower the body' . PHP_EOL;
    }

    public function initMethods()
    {
        $this->musicOn();
        $this->bodyLift();
        $this->lowerBody();
        parent::initMethods();
    }

}
