<?php
 abstract  class Geometric{
    public $name;
    public function getName(){
        return $this->name;
    }
    public abstract function getArea();
    public abstract function getPerimetter();
}