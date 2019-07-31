<?php

namespace RickKuilman\AwesomeUnits;

use PHPUnit\Framework\TestCase;

class AwesomeUnitTest extends TestCase
{
    /** @test */
    public function it_converts_a_unit_to_a_random_awesome_unit()
    {
        $awesomeUnit = new AwesomeUnit(10);

        $coffeeCups = $awesomeUnit->liters()->toCoffeeCups();

        $this->assertEquals(40, $coffeeCups);
    }
}
