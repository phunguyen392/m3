<?php
include "arrayList.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2.5);
$listInteger->add(3);
$listInteger->add(4);
$listInteger->add(5);






echo"<pre>";
print_r($listInteger->get(0));
echo "</pre>";
echo"<pre>";
print_r($listInteger->isInteger(1));
echo "</pre>";