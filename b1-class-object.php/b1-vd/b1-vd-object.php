<?php
class Mark {
    public static $name="hoang";
    public $age;
    public function __construct($name1, $age1)
    {
      $this->name=$name1;
      $this->age=$age1;  
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function setName($name) {
         $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
   
}
public static function  getAge1() {
return "tuoi cua toi la 25";
}
}

$person = new Mark("hoang", 11);

// $person->setName("hung") ;
// echo $marsk->getName();
echo Mark::$name;
echo Mark::getAge1();