<?php
interface Colorable
{
    
   public function howToColor();
}
class Square implements Colorable
{
    public $side;
    public function __construct($side)
    {
        $this->side = $side;
    }
    public function getArea(){
        echo "den tich hinh vuong la: " . $this->side * $this->side;
    }
    public function howToColor()
    {
        echo "Color all four sides..";
    }
}

class Circle implements Colorable
{
    public function howToColor()
    {
        echo "Color all four sides..";
    }
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea(){
        echo "dien tich hinh tron la: " . $this->radius * $this->radius * pi();
    }
}



class Rectangle implements Colorable
{
    public $height;
    public $width;
    public function __construct($height,$width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function getArea()
    {
        return $this->height * $this->width;
    }
    public function howToColor()
    {
        echo "Color all four sides..";
    }
}


$square = new Square(3);
$circle = new Circle(5);
$rectangle = new Rectangle(2,4);
$hinh_hoc = 
[
    $square,
    $circle,
    $rectangle
];
foreach ($hinh_hoc as $square ){
    echo  $square->getArea();
    echo "<br>";
    $square->howToColor();
    echo "<br>";
}
