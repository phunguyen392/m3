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
        echo $this->name . "know to sleep.";
    }
}

class Man extends People {
    private $breed;
    
    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }
    
    public function speak() {
        echo $this->name . "  know  to speak.";
    }
}
$People = new People("man",3);
echo $People->eat();