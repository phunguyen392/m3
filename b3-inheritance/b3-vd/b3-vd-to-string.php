<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // public function __toString() {
    //     return "Person: [Name: {$this->name}, Age: {$this->age}]";
    // }
}

$person = new Person("John Doe", 30);
echo $person; // Output: Person: [Name: John Doe, Age: 30]