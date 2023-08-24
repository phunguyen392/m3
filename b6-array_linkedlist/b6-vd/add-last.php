<?php
//Phương thức addLast()
class LinkedList {
    private $head;
  
    public function addFirst($data) {
      $newNode = new Node($data);
      $newNode->next = $this->head;
      $this->head = $newNode;
    }
  }
  
  class Node {
    public $data;
    public $next;
  
    public function __construct($data) {
      $this->data = $data;
      $this->next = null; 
    }
  }