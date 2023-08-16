<?php
class MyClass {
   public $myVariable;

    public function __construct($value) {
        $this->myVariable = $value;
    }

    public function getMyVariable() {
        return $this->myVariable;
    }
}

$myclass = new MyClass("hung");
echo $myclass->getMyVariable(); 