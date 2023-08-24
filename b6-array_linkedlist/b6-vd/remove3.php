<?php

public function remove($data) {
    if ($this->isEmpty()) {
        return; // Danh sách rỗng, không có gì để xóa
    } elseif ($this->head->data === $data) {
        $this->head = $this->head->next; // Xóa node đầu tiên (head)
    } else {
        $current = $this->head;
        while ($current->next !== null && $current->next->data !== $data) {
            $current = $current->next;
        }
        if ($current->next !== null) {
            $current->next = $current->next->next; // Xóa node sau node hiện tại
        }
    }
    $this->size--;
}