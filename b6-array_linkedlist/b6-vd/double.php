<?php
class DoublyLinkedList {
    private $head;
    private $tail;
    private $size;

    private class Node {
        public $data;
        public $prev;
        public $next;

        public function __construct($data) {
            $this->data = $data;
            $this->prev = null;
            $this->next = null;
        }
    }

    public function __construct() {
        $this->head = null;
        $this->tail = null;
        $this->size = 0;
    }

    public function getSize() {
        return $this->size;
    }

    public function isEmpty() {
        return $this->size === 0;
    }

    public function addFirst($data) {
        $newNode = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
        $this->size++;
    }

    public function addLast($data) {
        $newNode = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->prev = $this->tail;
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
        $this->size++;
    }

    public function removeFirst() {
        if ($this->isEmpty()) {
            return null;
        }

        $removedNode = $this->head;
        if ($this->head === $this->tail) {
            $this->head = null;
            $this->tail = null;
        } else {
            $this->head = $this->head->next;
            $this->head->prev = null;
        }
        $removedNode->next = null;
        $this->size--;
        return $removedNode->data;
    }

    public function removeLast() {
        if ($this->isEmpty()) {
            return null;
        }

        $removedNode = $this->tail;
        if ($this->head === $this->tail) {
            $this->head = null;
            $this->tail = null;
        } else {
            $this->tail = $this->tail->prev;
            $this->tail->next = null;
        }
        $removedNode->prev = null;
        $this->size--;
        return $removedNode->data;
    }

    public function display() {
        if ($this->isEmpty()) {
            echo "Doubly Linked List is empty.";
        } else {
            $current = $this->head;
            while ($current !== null) {
                echo $current->data . " ";
                $current = $current->next;
            }
        }
        echo "\n";
    }
}
$dll = new DoublyLinkedList();
$dll->addFirst(10);
$dll->addFirst(5);
$dll->addLast(15);
$dll->display(); // Output: 5 10 15
echo "Size: " . $dll->getSize(); // Output: Size: 3

$dll->removeFirst();
$dll->removeLast();
$dll->display(); // Output: 10
echo "Size: " . $dll->getSize(); // Output: Size: 1 