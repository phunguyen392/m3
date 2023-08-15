<?php

class Cylinder extends Circle
{
    function __construct(string $name,
                         int|float $radius,
                         public int $height)
    {
        parent::__construct($name, $radius);
    }

    function calculateArea(): float|int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    function calculateVolume(): float|int
    {
        return parent::calculateArea() * $this->height;
    }
}