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

class BinaryTree {
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

    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->data . " ";
            $this->inorderTraversal($node->right);
        }
    }
}

// Sử dụng cây nhị phân
$binaryTree = new BinaryTree();
$binaryTree->insert(5);
$binaryTree->insert(3);
$binaryTree->insert(8);
$binaryTree->insert(2);
$binaryTree->insert(4);
$binaryTree->insert(7);
$binaryTree->insert(9);

echo "Inorder traversal: ";
$binaryTree->inorderTraversal($binaryTree->root);