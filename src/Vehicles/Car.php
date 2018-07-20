<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Car extends Vehicle
{
    public $moveAction = "rides";

    public function musicOn()
    {
        return $this->name . ' music switched on' . PHP_EOL;
    }

    public function initMethods()
    {
        $this->musicOn();
        parent::initMethods();
    }
}