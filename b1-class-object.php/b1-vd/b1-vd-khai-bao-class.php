<?php
<<<<<<< HEAD:b1-class-object.php/b1-vd.php/b1-vd-khai-bao-class.php
if($_SERVER['REQUEST_METHOD']== "POST")
=======
class Customer{          // khai báo lớp
    public $name;           // khởi tọa thuôc thuộc tinh
    public $age;
    public function abc(){    // khơi tạo phương thức
       
       

        echo "ten toi la: " . $this->name  . "<br>"; 
        echo "nam nay :" . $this -> age. " tuoi";
    }
  

}
$Customer = new Customer();   //khơi tạo đối tượng
$Customer -> name = "a";
$Customer -> age = "19";
$Customer -> abc();
>>>>>>> e7d7120c287936f1b3be8281fee01ef7c84b31ef:b1-class-object.php/b1-vd/b1-vd-khai-bao-class.php
