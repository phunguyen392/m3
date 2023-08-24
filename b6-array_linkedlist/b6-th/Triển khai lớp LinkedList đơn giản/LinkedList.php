<?php
class LinkedList{
    public $firstNode;
    public $lastNode;
    public $count;
    public function __construct($firstNode=null,$lastNode=null,$count=0)
    {
        $this->firstNode = $firstNode;
        $this->lastNode = $lastNode;
        $this->count = $count;
    }
    function insertFirst($data){
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if(is_null($this->lastNode)){
            $this->lastNode = $node;
        }
        $this->count++;
    }
    function insertLast($data)
{
    if (!is_null($this->firstNode)) {
        $node = new Node($data);
        $currentLastNode = $this->lastNode;
        $currentLastNode->next = $node;
        $this->lastNode = $node;
        $this->count++;
    } else {
        $this->insertFirst($data);
    }
}
function totalNodes()
{
 return $this->count;
}
function readList()
{
    $listData = [];
    $current = $this->firstNode;

    while (!is_null($current)) {
        $listData[] = $current->readNode();
        $current = $current->next;
    }
    return $listData;
}
}