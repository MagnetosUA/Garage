<?php

require __DIR__ . '/vendor/autoload.php';

use Auxiliary\VehiclesFactory;

$factory = new VehiclesFactory();

foreach ($factory->vehicles as $item) {
    $item->initMethods();
}
