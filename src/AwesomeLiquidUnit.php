<?php

namespace RickKuilman\AwesomeUnits;

class AwesomeLiquidUnit
{
    /**
     * @var int
     */
    private $milliliters;

    public function __construct(int $milliliters)
    {
        $this->milliliters = $milliliters;
    }

    public function toCoffeeCups()
    {
        return $this->milliliters / 250;
    }
}
