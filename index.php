<?php

require __DIR__ . '/vendor/autoload.php';

use Vehicles\Car;
use Vehicles\Helicopter;
use Vehicles\Truck;

$mercedes = new Car('Mersedes');
$helicopter = new Helicopter('Mi-8');
$kamaz = new Truck('Kamaz');

//$mercedes->move();
//$helicopter->move();
$kamaz->move();
