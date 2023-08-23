<?php
class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $newNode = new Node($data);

        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($newNode, $this->root);
        }
    }

    private function insertNode($newNode, &$node) {
        if ($node === null) {
            $node = $newNode;
        } else {
            if ($newNode->data < $node->data) {
                $this->insertNode($newNode, $node->left);
            } else {
                $this->insertNode($newNode, $node->right);
            }
        }
    }

    public function search($data) {
        return $this->searchNode($data, $this->root);
    }

    private function searchNode($data, $node) {
        if ($node === null || $data === $node->data) {
            return $node;
        }

        if ($data < $node->data) {
            return $this->searchNode($data, $node->left);
        } else {
            return $this->searchNode($data, $node->right);
        }
    }
}

// Sử dụng cây nhị phân tìm kiếm
$bst = new BinarySearchTree();
$bst->insert(8);
$bst->insert(3);
$bst->insert(10);
$bst->insert(1);
$bst->insert(6);
$bst->insert(14);

$result = $bst->search(6);
if ($result) {
    echo "Giá trị 6 được tìm thấy trong cây nhị phân tìm kiếm.";
} else {
    echo "Giá trị 6 không tồn tại trong cây nhị phân tìm kiếm.";
}