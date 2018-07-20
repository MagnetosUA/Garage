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
        echo $this->name . " is ". $this->moveAction . PHP_EOL;
    }

    public function stop()
    {
        echo $this->name . " is " . $this->stopAction . PHP_EOL;
    }

    public function refuel()
    {
        echo $this->name . " refuels " . $this->fuel . PHP_EOL;
    }

    public function initMethods()
    {
        $this->move();
        $this->stop();
        $this->refuel();
        echo PHP_EOL . PHP_EOL;
    }
}

