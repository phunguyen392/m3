<?php


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
       $this->radius *= (1 + $percent / 100);
   }

   public function getArea()
   {
      return pi() * $this->radius * $this->radius;
   }
};




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
      $this->width *= (1 + $percent / 100);
      $this->height *= (1 + $percent / 100);
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
      $this->side *= (1 + $percent / 100);
   }

   public function getArea()
   {
      return $this->side * $this->side;
   }
}
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
$square = new Square(3);

$hinh_hoc =
   [
      $circle,
      $rectangle,
      $square

   ];

foreach ($hinh_hoc as $circle) {


   echo "S trước khi tăng kích thước: " . $circle->getArea();
   echo "<br>";
   $percent = (10);
   $circle->resize($percent) . "<br>";
   echo   "S sau khi tăng kích thước: "  . $circle->getArea();
   echo "<hr/>";
   echo "<br>";
}
