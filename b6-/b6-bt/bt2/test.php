<?php
class LinkedList {
    private $count;
    private $firstNode;
    private $lastNode;

    public function __construct($firstNode=null,$lastNode=null,$count=0)
    {
        $this->firstNode = $firstNode;
        $this->lastNode = $lastNode;
        $this->count = $count;
    }

    public function add($index, $data) {
        if ($index < 0 || $index > $this->count) {
            throw new Exception("Invalid index");
        }
    
        $newNode = new Node($data);
    
        if ($this->count === 0) {
            $this->firstNode = $newNode;
            $this->lastNode = $newNode;
        } elseif ($index === 0) {
            $newNode->next = $this->firstNode;
            $this->firstNode = $newNode;
        } elseif ($index === $this->count) {
            $this->lastNode->next = $newNode;
            $this->lastNode = $newNode;
        } else {
            $prevNode = $this->getNode($index - 1);
            $newNode->next = $prevNode->next;
            $prevNode->next = $newNode;
        }
    
        $this->count++;
    }

    public function addFirst($data) {
        $this->add(0, $data);
    }

    public function addLast($data) {
        $this->add($this->count, $data);
    }

    public function remove($index) {
        if ($index < 0 || $index >= $this->count) {
            throw new Exception("Invalid index");
        }

        if ($index === 0) {
            $removedNode = $this->firstNode;
            $this->firstNode = $this->firstNode->next;

            if ($this->count === 1) {
                $this->lastNode = null;
            }
        } else {
            $prevNode = $this->getNode($index - 1);
            $removedNode = $prevNode->next;
            $prevNode->next = $removedNode->next;

            if ($index === $this->count - 1) {
                $this->lastNode = $prevNode;
            }
        }

        $removedNode->next = null;
        $this->count--;

        return $removedNode->data;
    }

    public function get($index) {
        $node = $this->getNode($index);
        return $node->data;
    }

    public function size() {
        return $this->count;
    }

    public function printList() {
        $current = $this->firstNode;

        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }

    }

    public function clone() {
        $cloneList = new LinkedList();
        $current = $this->firstNode;

        while ($current != null) {
            $cloneList->addLast($current->data);
            $current = $current->next;
        }

        return $cloneList;
    }

    public function contains($data) {
        $current = $this->firstNode;

        while ($current != null) {
            if ($current->data === $data) {
                return true;
            }

            $current = $current->next;
        }

        return false;
    }

    public function indexOf($data) {
        $current = $this->firstNode;
        $index = 0;

        while ($current != null) {
            if ($current->data === $data) {
                return $index;
            }

            $current = $current->next;
            $index++;
        }

        return -1;
    }

    private function getNode($index) {
        if ($index < 0 || $index >= $this->count) {
            throw new Exception("Invalid index");
        }

        $current = $this->firstNode;
        $currentIndex = 0;

        while ($currentIndex < $index) {
            $current = $current->next;
            $currentIndex++;
        }

        return $current;
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

// Tạo một đối tượng LinkedList
$linkedList = new LinkedList();

// Thêm các phần tử vào danh sách bằng phương thức add()
$linkedList->add(0, 10);
$linkedList->add(1, 20);
$linkedList->add(2, 30);
$linkedList->add(0, 3);
$linkedList->add(0, 4);



// In ra danh sách
// $linkedList->printList();

echo "<pre>";
print_r($linkedList);
echo "</pre>";
echo $data . $linkedList->indexOf(10);
