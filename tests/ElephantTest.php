<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vehicles\Elephant;

class ElephantTest extends TestCase
{
    private $object;
    private $name = "MyElephant";

    protected function setUp()
    {
        $this->object = new Elephant($this->name);
    }

    public function testAdd()
    {
        $this->assertEquals($this->name . " is ". $this->object->moveAction . PHP_EOL, $this->object->move());
        $this->assertEquals( $this->name . " is " . $this->object->stopAction . PHP_EOL, $this->object->stop());
        $this->assertEquals( 'The elephant eats grass' . PHP_EOL, $this->object->refuel());
    }

    protected function tearDown()
    {
        $this->object = NULL;
    }
}

