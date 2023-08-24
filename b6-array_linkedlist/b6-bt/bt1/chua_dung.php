<?php
class MyList{
public $size;
public $elements;
public function __construct($size=0,$elements=[])
{
    $this->size = $size;
    $this->elements = $elements;
}
function add($obj){
    return $this->elements = $obj;
}
function insert($index, $obj){
    array_splice($this->elements, $index, 0, [$obj]);
    return $this->elements[$index];
}




function remove($index){
    if (isset($this->elements[$index])) {
        array_splice($this->elements, $index, 1);
}

}

function get($index){
    return isset($this->elements[$index]) ? $this->elements[$index] : null;
}

function size(){
return $this->elements;
}
 function clear(){

 }


}


$mylist = new MyList();
 $mylist->add(4);
 $mylist->add(2);
 $mylist->add(3);
$mylist->get(0);
// echo "<pre>";
// print_r($mylist->elements);
// echo "</pre>";



 $mylist->insert(0,6);
echo "<pre>";

print_r($mylist->elements);

echo "</pre>";