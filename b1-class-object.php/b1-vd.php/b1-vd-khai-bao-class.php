<?php
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
