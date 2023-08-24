<?php
//Phương thức add()

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