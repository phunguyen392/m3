<?php
class Stack{
    public $stack;
    public $limit;
    public function __construct($limit=5)
    {
        $this->stack = [];
        $this->limit = $limit  ;
      }
    public function push($item){
        if($this->isFull()){
            echo "mang day k the them";
        }else{
            array_unshift($this->stack, $item);
            
        }

    }
    public function pop(){
        if(!empty($this->stack)){

            array_shift($this->stack);
        }else{
            echo "mang rong k co gi de xoa";
        }
    }
    public function top(){
        if(empty($this->stack)){
          return  $this->stack[0];
        }else{
            echo "mang rong";
        }
    }
    public function isEmpty(){
        if(empty($this->stack)){
            echo "mang rong";
        }else{
            echo "k rong";
        }
    }
    public function isFull(){
        return count($this->stack) >= $this->limit;

        }
    }





$stack = new Stack();
$stack->push(2);
$stack->push(12);
$stack->push(9);
$stack->push(2);
$stack->push(12);
// $stack->push(9);
// $stack->push(17);
// $stack->push(19);

// $stack->push(17);
// $stack->push(19);

$stack->pop();
$stack->pop();
// $stack->pop();

// echo $stack->top();
// $stack->isEmpty();


echo "<pre>";
print_r($stack);
echo "</pre>";