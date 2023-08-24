<?php
// Đặt tên không tốt
getArea($a,$b);


        // đặt tên biến chiêu dài và chiều rộng :
        $x;  => $chieu_dai or $length;
        $y;  => $chieu_rong or $width

// Phương thức quá dài
getTinh_dien_tich_cua_hinh_chu_nhat() => getDientich() or getArea();



// Lớp quá dài
 class  UserManagementSystemWithDatabaseAndEmail{};


 class HinhChuNhatTrongHinhHoc{};

// Phương thức xử lý quá nhiều việc

getOperation(){
  //  Phép cộng: Addition
  //  Phép trừ: Subtraction
  //  Phép nhân: Multiplication
  //  Phép chia: Division
}



// Phương thức có quá nhiều tham số

// function calculateTotalPrice($quantity, $price, $discount, $taxRate, $shippingFee, $customerPoints, $...)
{
    // Quá nhiều tham số gây khó khăn trong việc sử dụng và hiểu phương thức
    // Có thể xem xét gom nhóm các tham số liên quan vào một đối tượng
}

// Lạm dụng quá nhiều ghi chú (comment) trong mã nguồn

  
// Mã nguồn bị trùng lặp
function calculateTotalPrice($quantity, $price)
{
    $total = $quantity * $price;
    // ...
    $total = $quantity * $price;
    // ...
}

// Sử dụng các giá trị magic
echo  ("Hello World!");
echo "<hr>";
echo "Dòng " . __LINE__ . " trong tệp tin " . __FILE__;
// Output: Dòng 3 trong tệp tin /path/to/file.php