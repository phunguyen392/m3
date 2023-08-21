<?php
 interface Resizeable{
  public function resize($percent);

<<<<<<< HEAD

interface Resizeable
{
   function resize($percent);
}

class Circle implements Resizeable
{
   private $radius;

   public function __construct($radius)
   {
      $this->radius = $radius;
   }

   public function resize($percent)
   {
      $this->radius *= ($percent / 100);
   }

   public function getArea()
   {
      return pi() * $this->radius * $this->radius;
   }
=======
 };
 class Circle implements Resizeable{
   public $radius;
function __construct($radius)
{
   $this->radius = $radius;
}
public function getArea(){
   return $this->radius * $this->radius * pi();
>>>>>>> 777f496816e407cb9acf3b81953f3e32ab5841cb
}
public function resize($percent){
   $this->radius *= (1 + $percent / 100);
   return $this->getArea();}

<<<<<<< HEAD
class Rectangle implements Resizeable
{
   private $width;
   private $height;

   public function __construct($width, $height)
   {
      $this->width = $width;
      $this->height = $height;
   }

   public function resize($percent)
   {
      $this->width *= ($percent / 100);
      $this->height *= ($percent / 100);
   }

   public function getArea()
   {
      return $this->width * $this->height;
   }
}

class Square implements Resizeable
{
   private $side;

   public function __construct($side)
   {
      $this->side = $side;
   }

   public function resize($percent)
   {
      $this->side *= ($percent / 100);
   }

   public function getArea()
   {
      return $this->side * $this->side;
   }
}
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
$square = new Square(3);

$hinh_hoc = [
   $circle,
   $rectangle,
   $square

];

foreach ($hinh_hoc as $circle){

   
   echo "S trước khi tăng kích thước: " . $circle->getArea();
   echo "<br>";
   $percent = rand(1, 100);
   $circle->resize($percent);
   echo "S sau khi tăng kích thước: "  . $circle->getArea();
   echo "<br>";
   echo "<br>";

}
=======

}
$circle = new Circle(3);
echo "dien tich hinh tron la: " . $circle->getArea(). "<br>";
echo $circle->resize(100);
>>>>>>> 777f496816e407cb9acf3b81953f3e32ab5841cb
