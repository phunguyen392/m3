<?php
//Phương thức addFirst()
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class MyLinkedList {
    private $head;
    private $size;

    public function __construct() {
        $this->head = null;
        $this->size = 0;
    }

    public function getSize() {
        return $this->size;
    }

    public function isEmpty() {
        return $this->size == 0;
    }

    public function addFirst($data) {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
        $this->size++;
    }

    public function display() {
        if ($this->isEmpty()) {
            echo "LinkedList is empty.";
        } else {
            $current = $this->head;
            while ($current != null) {
                echo $current->data . " ";
                $current = $current->next;
            }
        }
        echo "\n";
    }
}

$linkedlist = new MyLinkedList();
$linkedlist->addFirst(10); // Thêm node có giá trị 10 vào đầu LinkedList
$linkedlist->addFirst(20); // Thêm node có giá trị 20 vào đầu LinkedList
$linkedlist->display(); // Hiển thị giá trị của LinkedList: 20 10