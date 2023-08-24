<?php


class MyList {
    public $size;
    public $elements;

    public function __construct($size = 0, $elements = []) {
        $this->size = $size;
        $this->elements = $elements;
    }

    public function add($obj) {
        $this->elements[] = $obj;
    }

    public function insert($index, $obj) {
        array_splice($this->elements, $index, 0, $obj);
        return  $this->elements[$index];
    }

    public function remove($index) {
        if (isset($this->elements[$index])) {
            array_splice($this->elements, $index, 1);
        }
    }

    public function get($index) {
        return isset($this->elements[$index]) ? $this->elements[$index] : null;
    }

    public function size() {
        return count($this->elements);
    }

    public function clear() {
        $this->elements = [];
    }
    public function addAll($arr){
        $this->elements = array_merge($this->elements,$arr);
    }
    public function isEmpty(){
        return empty($this->elements);
    }
    public function sort(){
        return sort($this->elements);
    }
    public function reset(){
        return $this->elements = [];
    }
    public function indexOf($obj){
       
       $index = array_search($obj,$this->elements);
        if($index !== false){
            echo "so " . "$obj " . " nam o vi tri thu: " .$index;
        }else{
            echo "k tim thay";
        }
    }
}

$mylist = new MyList();

$mylist->add(4);
$mylist->add(2);
$mylist->add(3);

echo "<pre>";
print_r($mylist->elements);
echo "</pre>";

$mylist->insert(1, 6);
echo "moi";
echo "<pre>";
print_r($mylist->elements);
echo "</pre>";

$arr = [8,12,45];
$mylist->addAll($arr);
$mylist->sort();
// $mylist->reset();
$mylist->indexOf(12);
echo "<pre>";
print_r($mylist->elements);
echo "</pre>";
echo $mylist->isEmpty()?"mang rong":"mang k rong";