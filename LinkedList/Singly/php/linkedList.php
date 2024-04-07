<?php

class Node {
    public $data;

    public $next;
    public function __construct($nodeData) {
        $this->data = $nodeData;
        $this->next = null;
    }
}

class SinglyLinkedList {
    public $head;
    public $tail;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    public function insertElement($data) {
        $node = new Node($data);
        if ($this->head) {
            $this->tail->next = $node;
        } else {
            $this->head = $node;
        }
        $this->tail = $node;
    }
}


$linkedList = new SinglyLinkedList();
for($i = 0; $i < 10; $i++) {
    $linkedList->insertElement($i);
}

print_r($linkedList);