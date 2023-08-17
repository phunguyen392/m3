<?php
class Circle
{
    public $radius;
    public $color;
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return   $this->color;
    }



    public function getArea()
    {
        return  pi() * $this->radius * $this->radius;
    }
    public function __toString()
    {
        return "Circle = [color={$this->color}, radius={$this->radius}]";
    }
}
