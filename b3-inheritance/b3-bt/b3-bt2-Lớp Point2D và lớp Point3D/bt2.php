<?php
class Point2D{
    public float $x;
    public float $y; 
    public function __construct(float $x, float $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x){
        $this->x = $x;
    }
    public function getX(){
        return $this->x;
    }
    public function setY($y){
        $this->y = $y;
    }
   
    public function getY(){
        return $this->y;
    }
    public function __toString()
    {
        return 
    }
}