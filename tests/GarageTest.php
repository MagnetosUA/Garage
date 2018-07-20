<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vehicles\Car;

class GarageTest extends TestCase
{
    private $car;
    private $carsName = "MyCar";
    private $moveAction = "rides";

    protected function setUp()
    {
        $this->car = new Car($this->carsName);
    }

    public function testAdd()
    {
        $result = $this->car->move();

        //$result2 = $this->carsName . " is ". $this->moveAction . PHP_EOL;
//        echo gettype($result);
//        echo $result;
//        die;
        $this->assertEquals($this->carsName . " is ". $this->moveAction . PHP_EOL, $this->car->move());
    }

    protected function tearDown()
    {
        $this->car = NULL;
    }
}

