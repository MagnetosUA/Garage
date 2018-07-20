<?php

namespace Vehicles;

use Vehicles\Abstracts\Vehicle;

class Ship extends Vehicle
{
    public $moveAction = "swimming";
    public $stopAction = "moored";
    public $fuel = 'diesel oil';

    public function liftAnchor()
    {
        return $this->name . ' lift anchor' . PHP_EOL;
    }

    public function lowerAnchor()
    {
        return $this->name . ' lower the anchor' . PHP_EOL;
    }

    public function initMethods()
    {
        echo $this->liftAnchor();
        echo $this->lowerAnchor();
        parent::initMethods();
    }
}

