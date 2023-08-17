<?php
class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
        
    }
    public function setHeight($height){
        $this->height = $height;

    }
    public function getHeight(){
       return $this->height ;

    }
   
    public function getVolume(){
        return pi() * $this->radius * $this->radius * $this->height;
    }
    public function __toString()
    {
        return "Cylinder  [radius={$this->radius}, color={$this->color},
         height={$this->height}]";
    }
}

