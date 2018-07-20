<?php

namespace Auxiliary;

use Vehicles\Bike;
use Vehicles\Car;
use Vehicles\Elephant;
use Vehicles\Helicopter;
use Vehicles\Motorbike;
use Vehicles\Ship;
use Vehicles\Truck;

class VehiclesFactory
{
    public $vehicles = [];

    public function __construct()
    {
        $this->vehicles[] = new Car('Mercedes');
        $this->vehicles[] = new Elephant('Elephant');
        $this->vehicles[] = new Motorbike('Harley');
        $this->vehicles[] = new Helicopter('MI-35');
        $this->vehicles[] = new Ship('Ovation of the Seas');
        $this->vehicles[] = new Truck('Volvo FH16');
        $this->vehicles[] = new Car('BMW');
        $this->vehicles[] = new Bike('Ukraine');
    }
}
