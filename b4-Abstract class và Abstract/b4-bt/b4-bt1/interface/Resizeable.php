<?php
interface Resizeable{
   function resize();
}
class Circle implements Resizeable
{
   function resize(){
    echo "tang len 1";
   }

}
class Rectangle implements Resizeable
{
   function resize(){
    echo "tang len 10";
   }

}
class Square implements Resizeable
{
   function resize(){
    echo "tang len 100";
   }

}
$circle = new Circle();
echo $circle->resize();