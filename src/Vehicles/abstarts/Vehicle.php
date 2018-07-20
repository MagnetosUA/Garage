<?php

namespace Vehicles\Abstracts;

abstract class Vehicle
{
    public $name;
    public $moveAction = "moving";
    public $stopAction = "stops";
    public $fuel = 'benzine';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move()
    {
        return $this->name . " is ". $this->moveAction . PHP_EOL;
    }

    public function stop()
    {
        return $this->name . " is " . $this->stopAction . PHP_EOL;
    }

    public function refuel()
    {
        return $this->name . " refuels " . $this->fuel . PHP_EOL;
    }

    public function initMethods()
    {
        echo $this->move();
        echo $this->stop();
        echo $this->refuel();
        echo PHP_EOL . PHP_EOL;
    }
}

