<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vehicles\Motorbike;

class MotorbikeTest extends TestCase
{
    private $object;
    private $name = "MyMotorbike";

    protected function setUp()
    {
        $this->object = new Motorbike($this->name);
    }

    public function testAdd()
    {
        $this->assertEquals($this->name . " is ". $this->object->moveAction . PHP_EOL, $this->object->move());
        $this->assertEquals( $this->name . " is " . $this->object->stopAction . PHP_EOL, $this->object->stop());
        $this->assertEquals( $this->name . " refuels " . $this->object->fuel . PHP_EOL, $this->object->refuel());
    }

    protected function tearDown()
    {
        $this->object = NULL;
    }
}

