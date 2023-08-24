<?php
public function removeLast() {
    if ($this->isEmpty()) {
        throw new Exception("LinkedList is empty");
    }

    if ($this->getSize() === 1) {
        $this->head = null;
    } else {
        $current = $this->head;
        $previous = null;

        while ($current->next !== null) {
            $previous = $current;
            $current = $current->next;
        }

        $previous->next = null;
    }

    $this->size--;
}