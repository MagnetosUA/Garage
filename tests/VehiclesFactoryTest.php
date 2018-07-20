<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Auxiliary\VehiclesFactory;

class VehiclesFactoryTest extends TestCase
{
    private $object;

    protected function setUp()
    {
        $this->object = new VehiclesFactory();
    }

    private function checkArray()
    {
        $vehicles = $this->object->vehicles;
        foreach ($vehicles as $vehicle) {
            if (!is_object($vehicle)) {
                return false;
            }
        }
        return 1;
    }

    public function testAdd()
    {
        $result = $this->checkArray();
        $this->assertEquals(true, $result);
    }

    protected function tearDown()
    {
        $this->object = NULL;
    }
}

