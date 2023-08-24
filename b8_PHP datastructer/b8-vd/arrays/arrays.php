<?php
// Khởi tạo mảng cố định
$qtArray = new SplFixedArray(6);

// Gán giá trị cho các phần tử trong mảng
$qtArray[5] = [1,2,324,43];
$qtArray[0] = "TI";
$qtArray[1] = "CG";
$qtArray[2] = "DA";
$qtArray[3] = "NANG";
$qtArray[4] = "NANGs";

$chuoi = implode(",",$qtArray[5]);



// Truy cập và hiển thị các phần tử trong mảng
// echo $qtArray[0];


echo "<hr>";
// Đếm số phần tử trong mảng cố định
// echo "độ dài của mảng cố định la: " . $qtArray->count();
echo "<hr>";
// Duyệt qua mảng và hiển thị các phần tử
for($i=0; $i<count($qtArray); $i++){
    echo $qtArray[$i]."<br>";
}

echo "<pre>";
print_r($qtArray);
echo "</pre>";

