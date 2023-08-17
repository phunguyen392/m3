<?php
include_once ("Circle.php");
include_once ("Comparable.php");
include_once ("ComparableCircle.php");

$circleOne = new ComparableCircle('Circle One', 21);
$circleTwo = new ComparableCircle('Circle Two', 20);
$circleThree = new ComparableCircle('Circle Three', 21);
var_dump($circleOne->compare($circleThree)); 
var_dump($circleThree->compare($circleTwo)); 
var_dump($circleTwo->compare($circleThree));