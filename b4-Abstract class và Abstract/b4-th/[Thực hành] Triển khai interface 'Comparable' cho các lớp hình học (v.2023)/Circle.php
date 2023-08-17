<?php
class Circle{
   
    public function __construct(private $name,private $radius)
    {
        
    }
    public function getRadius(){
        return $this->radius;
    }
}