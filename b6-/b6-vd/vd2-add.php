<?php






//Phương thức add(index: int, e: Object)

 function add($index, $e) {
    if ($index < 0 || $index > $this->size) {
        throw new Exception("Invalid index");
    }
    if ($index === 0) {
        $this->addFirst($e);
    } else {
        $newNode = new Node($e);
        $current = $this->head;
        for ($i = 0; $i < $index - 1; $i++) {
            $current = $current->next;
        }
        $newNode->next = $current->next;
        $current->next = $newNode;
        $this->size++;
    }
}


