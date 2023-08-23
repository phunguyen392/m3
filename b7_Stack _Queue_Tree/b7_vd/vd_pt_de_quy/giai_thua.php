<?php
function ptdq($n)
{
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * ptdq($n - 1);
    }
}

// Sử dụng phương thức đệ quy để tính giai thừa
$number = 5;
$result = ptdq($number);
echo "Giai thừa của $number là: $result";