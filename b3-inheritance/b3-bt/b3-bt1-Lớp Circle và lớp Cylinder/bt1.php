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
$circle = new Circle(2,"pink",12);
echo $circle;
echo "<br>";
echo "Circle Area: " . $circle->getArea();
echo "<br>";
$cylinder = new Cylinder(2, "green", 5, 6, 11);
echo $cylinder;
echo "<br> ";
echo "Cylinder Volume: " . $cylinder->getVolume();
