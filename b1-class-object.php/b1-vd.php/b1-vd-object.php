<?php
class Person {
    public $name;
    public $age;

    public function gr() {
        echo "Hello, my name is " . $this->name . " <br>"." I am " . $this->age . " years old.";
    }
}

// Tạo một đối tượng từ lớp Person
$person = new Person();

// Gán giá trị cho thuộc tính của đối tượng
$person->name = "Linh";
$person->age = 21;

// Gọi phương thức greet() của đối tượng
$person->gr();