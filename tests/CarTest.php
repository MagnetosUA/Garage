<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vehicles\Car;

class CarTest extends TestCase
{
    private $car;
    private $name = "MyCar";

    protected function setUp()
    {
        $this->car = new Car($this->name);
    }

    public function testAdd()
    {
        $this->assertEquals($this->name . " is ". $this->car->moveAction . PHP_EOL, $this->car->move());
        $this->assertEquals( $this->name . " is " . $this->car->stopAction . PHP_EOL, $this->car->stop());
        $this->assertEquals( $this->name . ' music switched on' . PHP_EOL, $this->car->musicOn());
    }

    protected function tearDown()
    {
        $this->car = NULL;
    }
}

