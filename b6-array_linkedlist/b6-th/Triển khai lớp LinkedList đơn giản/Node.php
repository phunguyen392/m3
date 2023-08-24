<?php
class Node{
    public $data;
    public $node;
    public function __construct($data= [],$next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
    function readNode(){
        return $this->data;
    }
}