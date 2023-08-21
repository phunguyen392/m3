Lưu ý rằng các ví dụ trên chỉ mang tính chất minh họa 
và không phải luôn luôn áp dụng cho mọi trường hợp. 
<?php


// Không đơn giản
for ($i = 0; $i < count($array); $i++) {
    // Logic xử lý
}

// Đơn giản
foreach ($array as $item) {
    // Logic xử lý
}


// Không trực tiếp
$isLoggedIn = ($user->getStatus() == 'active');
 
// Trực tiếp
$isActive = $user->isActive();    //  vũ active là chi

// Không dễ đọc
$a = $b * 2 + ($c - $d) / $e;

// Dễ đọc
$calculation = ($b * 2) + (($c - $d) / $e);


// Không dễ cải tiến
if ($status == 'active') {
    // Xử lý khi trạng thái là active
} else {
    // Xử lý khi trạng thái không phải active
}

// Dễ cải tiến
if ($user->isActive()) {
    // Xử lý khi trạng thái là active
} else {
    // Xử lý khi trạng thái không phải active
}


// Không rõ nghĩa
function abc($x, $y) {
    // Logic xử lý
}

// Rõ nghĩa
function calculateSum($x, $y) {
    // Logic xử lý
}


// Sự phụ thuộc nhiều
function processOrder($order) {
    $user = new User();
    $user->sendEmail();                 //sự phụ thuộc ở mô 
    $order->updateStatus();
}

// Sự phụ thuộc ít
function processOrder(User $user, Order $order) {
    $user->sendEmail();
    $order->updateStatus();
}



// Mã bị trùng lặp
function calculateArea($radius) {
    return 3.14 * $radius * $radius;
}

function calculateCircumference($radius) {
    return 2 * 3.14 * $radius;
}

// Mã không bị trùng lặp
function calculateArea($radius) {
    return pi() * $radius * $radius;
}

function calculateCircumference($radius) {
    return 2 * pi() * $radius;
}



// Thiết kế không rõ ràng
class Shape {
    // ...
    public function calculateArea() {
        // ...
    }
    
    public function calculateCircumference() {
        // ...
    }
}

// Thiết kế rõ ràng
interface Shape {
    public function calculateArea();
    public function calculateCircumference();
}

class Circle implements Shape {
    // ...
    public function calculateArea() {
        // ...
    }
    
    public function calculateCircumference() {
        // ...
    }
}