<?php
 interface Gender{
    const MAN = "man";
    const WOMEN = "women";

}
class Dancer{
    public $name;
    public $gender;
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
    public function getName(){
        return $this->name;
    }
    public function getGender(){
        return $this->gender;
    }

}
class SquareDancer extends Dancer implements Gender{
    public SplQueue $queMan;
    public SplQueue $queWomen;
    public function __construct($name, $gender)
    {
        parent::__construct($name,$gender);
        $this->queMan = new SplQueue();
        $this->queWomen = new SplQueue();
    }
    public function enqueue($dancer){
        $name = $dancer->getName();
        $gender = $dancer->getGender();
        if($this->gender ===  Gender::MAN){
           return $this->queMan->enqueue($dancer);
        }else{
            return $this->queWomen->enqueue($dancer);

    }
    
}
}
$squareDance = new SquareDancer();
$dancer = new Dancer();
// $squareDance = new SquareDancer("lan",Gender::WOMEN);

$squareDance->enqueue("lan",Gender::WOMEN);
$squareDance->enqueue("hoa",Gender::WOMEN);
$squareDance->enqueue("a",Gender::MAN);



echo "<pre>";
print_r( $squareDance);
echo "</pre>";