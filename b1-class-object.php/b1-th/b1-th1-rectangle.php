<?php
class Rectangle
{
function __construct(
    public int $width,
    public int $height

)
{
}
function  getArea(): int   
{

    return $this -> width * $this -> height;
}
function getPerimeter(): int{
    return (($this->width + $this -> height)*2);
}
function display(): string 
{
    return "Rectangle { " . "width=" . $this->width . " , height=" . $this->height . "}"; 
} 





}
