<?php
class Point
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        return [
            $this->x,
            $this->y
        ];
    }
    public function __toString()
    {
        return "Point [x={$this->x} , y={$this->y}]";
    }
}
class MoveablePoint extends Point{
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed; 
    }
    public function setXSpeed($xSpeed){
        $this->xSpeed = $xSpeed;
    }
    public function getXSpeed(){
        return $this->xSpeed;
    }

    public function setYSpeed($ySpeed){
        $this->ySpeed = $ySpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
}
