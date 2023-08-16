<?php
class Person {
    public string $name;
    private int $age;
    protected string $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getName() {
        return $this->name;
    }

    private function getAge() {
        return $this->age;
    }

    protected function getAddress() {
        return $this->address;
    }
}

class Employee extends Person {
    public function getEmployeeInfo() {
        $info = "Name: " . $this->name . "<br>";
        // $info .= "Age: " . $this->age . "<br>"; // Không thể truy cập thuộc tính private từ lớp con
        $info .= "Address: " . $this->address . "<br>"; // Có thể truy cập thuộc tính protected từ lớp con
        return $info;
    }
}

$person = new Person("John Doe", 30, "123 Main St");
echo "Name: " . $person->name . "<br>"; // Có thể truy cập thuộc tính public từ bên ngoài lớp
// echo "Age: " . $person->age . "<br>"; // Không thể truy cập thuộc tính private từ bên ngoài lớp
// echo "Address: " . $person->address . "<br>"; // Không thể truy cập thuộc tính protected từ bên ngoài lớp
echo "Name: " . $person->getName() . "<br>"; // Có thể truy cập phương thức public từ bên ngoài lớp

$employee = new Employee("Jane Smith", 25, "456 Broadway");
echo $employee->getEmployeeInfo(); // Có thể truy cập phương thức protected từ lớp con