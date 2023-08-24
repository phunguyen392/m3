<?php
//Phương thức removeFirst()

class LinkedList {

private $head;
public function removeFirst() {
  if($this->head == null) {
    return null;
  }
  
  $removedNode = $this->head;
  $this->head = $this->head->next;
  
  return $removedNode->data;
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


