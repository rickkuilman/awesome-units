<?php

namespace RickKuilman\AwesomeUnits;

class AwesomeUnit
{
    private $unit;

    public function __construct($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return AwesomeLiquidUnit
     */
    public function liters(): AwesomeLiquidUnit
    {
        return new AwesomeLiquidUnit($this->unit  * 1000);
    }
}
