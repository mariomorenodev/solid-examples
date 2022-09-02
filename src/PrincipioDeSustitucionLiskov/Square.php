<?php

namespace Solid\Examples\PrincipioDeSustitucionLiskov;

class Square implements Shape
{
    private $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function getArea(): float
    {
        return pow($this->side, 2);
    }
}
