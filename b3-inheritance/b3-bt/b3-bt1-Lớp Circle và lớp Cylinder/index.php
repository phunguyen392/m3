<?php
include_once 'circle.php';
include_once 'cylinder.php';
$circle = new Circle(2,"pink",12);
echo $circle;
echo "<br>";
echo "Circle Area: " . $circle->getArea();
echo "<br>";
$cylinder = new Cylinder(2, "green", 5, 6, 11);
echo $cylinder;
echo "<br> ";
echo "Cylinder Volume: " . $cylinder->getVolume();