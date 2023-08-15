<?php

class Circle extends Shape
{
    function __construct(string $name,
                         public int|float $radius)
    {
        parent::__construct($name);
    }

    function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
}
