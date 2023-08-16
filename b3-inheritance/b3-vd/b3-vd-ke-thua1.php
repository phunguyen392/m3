<?php
class Animal {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function eat() {
        echo $this->name . " is eating.";
    }
}
class Cat extends Animal {
    public function eat() {
        echo "The cat is eating.";
        // parent::eat(); // Gọi phương thức eat() của lớp cha
    }
}
// Sử dụng lớp con
$cat = new Cat("Tom");
$cat->eat();