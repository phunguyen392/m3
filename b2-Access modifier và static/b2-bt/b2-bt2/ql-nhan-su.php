<?php
class Employee{
    public $name;
    public $birthday;
    public $address;
    public $position;

    public function __construct($name,$birthday,$address,$position)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->position = $position;

    }
}

class EmployeeManager{
    public function __construct()
    {
        
    }
}