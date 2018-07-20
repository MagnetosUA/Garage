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
        echo $this->name . ' lift anchor' . PHP_EOL;
    }

    public function lowerAnchor()
    {
        echo $this->name . ' lower the anchor' . PHP_EOL;
    }

    public function initMethods()
    {
        $this->liftAnchor();
        $this->lowerAnchor();
        parent::initMethods();
    }
}
