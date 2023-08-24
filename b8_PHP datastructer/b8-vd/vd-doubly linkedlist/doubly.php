<?php
class Node {
    public $data;
    public $prev;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}

class DoublyLinkedList {
    public $head;

    public function insertAtBeginning($data) {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }

    public function insertAtEnd($data) {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
            $newNode->prev = $current;
        }
    }

    public function display() {
        $current = $this->head;
        echo "Doubly Linked List: ";
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }
}

$dll = new DoublyLinkedList();

$dll->insertAtEnd(10);
$dll->insertAtEnd(20);
$dll->insertAtBeginning(5);
$dll->insertAtEnd(30);

$dll->display();