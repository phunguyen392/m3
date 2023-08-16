<?php
class People {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function eat() {
        echo $this->name . "  know to eat.";
    }

    public function sleep() {
        echo $this->name . " know to sleep.";
    }
}

class Man extends People {
    protected $height;
    
    public function __construct($name, $age, $height) {
        parent::__construct($name, $age);
        $this->height = $height;
    }
    
    public function speak() {
        echo $this->name . "  know  to speak.";
    }
}

$man = new Man("con",1,15);
echo $man->sleep();