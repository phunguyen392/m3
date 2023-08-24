<?php
class Note{
    public $value;
    public $next;
    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}

class Queue{
    public $front;
    public $back;
    public function __construct()
    {
        $this->front = null;
        $this->back = null;

}
    public function isEmpty(){
        if($this->front == null){
            echo "mang rong";
        }else{
            echo "k rong";
        }
    }
    public function enQueue($value){
        $newNode = new Node($value);
        if($this->fron = $newNode)
    }
    public function deQueue(){
    }
}


$queue = new Queue();

$queue->enQueue(1);
$queue->enQueue(3);
$queue->enQueue(5);
$queue->enQueue(9);
$queue->enQueue(7);

$queue->deQueue();

// $queue->isEmpty();

echo "<pre>";
print_r($queue);
echo "</pre>";

