<?php
class Circle {
public int $radius;
public function __construct(int $radius) {
$this->radius = $radius;
}
}
class Cylinder extends Circle {
public int $height;
public function __construct(int $radius, int $height) {
parent::__construct($radius);
$this->height = $height;
}
}
$cylinder = new Cylinder(10, 30);
echo $cylinder->radius."<br>";
echo $cylinder->height;

?>