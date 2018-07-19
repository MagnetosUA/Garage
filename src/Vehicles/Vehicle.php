<?php

namespace Vehicles;

abstract class Vehicle
{
    public $name;
    public $moveAction = "moving";
    public $stopAction = "stops";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move()
    {
        echo $this->name." is ".$this->moveAction;
    }

    public function stop()
    {
        echo $this->name." is ".$this->moveAction;
    }
}

