<?php
require ('DB_driver.php');
 
// Tạo Mới Đối Tượng
$DB = new DB_driver();
 
// Kết nối đến cơ sở dữ liệu
$DB->connect();

/// INSERT
$DB->insert('customer', array(
    'name' => 'Nguyễn Văn Cường',
    'phone' => '0979306603'
));
 
// UPDATE
$DB->update('customer', array(
    'name' => 'TheHalfHeart'
), 'id = 1');
 
// DELETE
$DB->remove('customer', 'id = 1');
 
// GET LIST
var_dump($DB->get_list('select * from customer'));
 
// GET 1 ROW
var_dump($DB->get_row('select * from customer where id  = 2'));