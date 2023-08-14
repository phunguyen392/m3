<?php
class MyClass {
    public function __destruct() {
        echo "Đối tượng đã được hủy.";
    }
}

$obj = new MyClass();
unset($obj); // Khi đối tượng bị hủy, phương thức __destruct() sẽ được gọi tự động.