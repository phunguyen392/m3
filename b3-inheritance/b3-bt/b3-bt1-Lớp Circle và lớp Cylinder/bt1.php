<?php
class Circle{
    public $radius ;
    public $color ;
    public $area;
    public __construct($radius,$color,$area){
        $this->radius = $radius;
        $this->color = $color;
        $this->area = $area;

    }
    public function setRadius(){
        $this->radius = $radius;

    }
    public function getRadius(){
        return $this->radius
    }


    public function setColor(){
        $this->color = $color;
    }
    public function getColor(){
        return   $this->color;
    }

    public function setArea(){
        $this->area = $area;
}
public function getArea(){
return  $this->area;
}
}
class Circle extends Cylinder
