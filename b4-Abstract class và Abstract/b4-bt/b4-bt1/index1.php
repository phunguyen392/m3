<?php
 interface Resizeable{
  public function resize($percent);

 };
 class Circle implements Resizeable{
   public $radius;
function __construct($radius)
{
   $this->radius = $radius;
}
public function getArea(){
   return $this->radius * $this->radius * pi();
}
public function resize($percent){
   $this->radius *= (1 + $percent / 100);
   return $this->getArea();}


}
$circle = new Circle(3);
echo "dien tich hinh tron la: " . $circle->getArea(). "<br>";
echo $circle->resize(100);