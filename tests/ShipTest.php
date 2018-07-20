<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vehicles\Ship;

class ShipTest extends TestCase
{
    private $object;
    private $name = "MyShip";

    protected function setUp()
    {
        $this->object = new Ship($this->name);
    }

    public function testAdd()
    {
        $this->assertEquals($this->name . " is ". $this->object->moveAction . PHP_EOL, $this->object->move());
        $this->assertEquals( $this->name . " is " . $this->object->stopAction . PHP_EOL, $this->object->stop());
        $this->assertEquals( $this->name . ' lift anchor' . PHP_EOL, $this->object->liftAnchor());
        $this->assertEquals( $this->name . ' lower the anchor' . PHP_EOL, $this->object->lowerAnchor());
        $this->assertEquals( $this->name . " refuels " . $this->object->fuel . PHP_EOL, $this->object->refuel());
    }

    protected function tearDown()
    {
        $this->object = NULL;
    }
}

