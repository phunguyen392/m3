<?php
class MyClass {
    private $myVariable;

    public function getMyVariable() {
        return $this->myVariable;
    }

    public function setMyVariable($newValue) {
        $this->myVariable = $newValue;
    }
}
$obj = new MyClass();

// Gọi getter
$value = $obj->getMyVariable();
echo $value; // In ra giá trị của $myVariable

// Gọi setter
$obj->setMyVariable(42);