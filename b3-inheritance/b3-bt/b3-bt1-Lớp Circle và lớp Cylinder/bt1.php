<?php
class Circle
{
    public $radius;
    public $color;
    public $area;
    public function __construct($radius, $color, $area)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->area = $area;
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

    public function setArea( $area)
    {
        $this->area = $area;
    }
    public function getArea()
    {
        return  $this->area;
    }
    public function __toString()
    {
        return "Circle [radius={$this->radius}, color={$this->color}]";
    }
}
class Cylinder extends Circle
{
    public $volume;
    public $height;
    public function __construct($radius, $color, $area, $height, $volume)
    {
        parent::__construct($radius, $color, $area);
        $this->height = $height;
        $this->volume = $volume;
        
    }
    public function setHeight($height){
        $this->height = $height;

    }
    public function getHeight(){
       return $this->height ;

    }
    public function setVolume($volume){
        $this->volume = $volume;
    }
    public function getVolume(){
        return $this->volume;
    }
    public function __toString()
    {
        return "Cylinder  [radius={$this->radius}, color={$this->color},
         height={$this->height}, volume={$this->volume}]";
    }
}
$circle = new Circle(2,"pink",12);
echo $circle;
echo "<br>";
$cylinder = new Cylinder(2, "green", 5, 6, 11);
echo $cylinder;
