<?php
class MyClass {
    public static $count = 0;

    public static function incrementCount() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

myclass::incrementCount();
echo myclass::getCount(); // Kết quả: 1
