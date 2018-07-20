<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vehicles\Bike;

class BikeTest extends TestCase
{
    private $object;
    private $name = "MyBike";

    protected function setUp()
    {
        $this->object = new Bike($this->name);
    }

    public function testAdd()
    {
        $this->assertEquals($this->name . " is ". $this->object->moveAction . PHP_EOL, $this->object->move());
        $this->assertEquals( $this->name . " is " . $this->object->stopAction . PHP_EOL, $this->object->stop());
        $this->assertEquals( 'The bicycle does not consume fuel :)' . PHP_EOL, $this->object->refuel());
    }

    protected function tearDown()
    {
        $this->object = NULL;
    }
}

