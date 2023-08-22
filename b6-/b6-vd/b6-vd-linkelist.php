<?php
class MyLinkedList {
    public $head;
    public $size;

     class Node {
        public $data;
        public $next;

        public function __construct($data) {
            $this->data = $data;
            $this->next = null;
        }
    }

    public function __construct() {
        $this->head = null;
        $this->size = 0;
    }

    public function getSize() {
        return $this->size;
    }

    public function isEmpty() {
        return $this->size === 0;
    }

    public function add($data) {
        $newNode = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
        $this->size++;
    }

    public function display() {
        if ($this->isEmpty()) {
            echo "LinkedList is empty.";
        } else {
            $current = $this->head;
            while ($current !== null) {
                echo $current->data . " ";
                $current = $current->next;
            }
        }
    }
}