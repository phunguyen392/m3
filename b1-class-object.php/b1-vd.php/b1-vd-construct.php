<?php
class MyClass {
    public function __construct() {
        echo "Đối tượng đã được khởi tạo.";
    }
}

$obj = new MyClass(); // Khi đối tượng được tạo ra, phương thức __construct() sẽ được gọi tự động.