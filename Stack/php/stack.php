<?php 

/* 

    This stack implementation uses the array_push and array_pop methods

*/

class Stack{

    protected $limit;
    protected $stack;

    public function __construct($limit = 10, $inital)
    {
        $this->limit = $limit;
        $this->stack = $inital;
    }

    public function push($element){
        if (!$this->isFull())
            array_push($this->stack, $element);
        else 
            throw new Exception("Stack is full");
        
    }

    public function print(){
        echo "\n";
        print_r($this->stack);
        echo "\n";
    }

    public function pop(){
        if (!$this->isEmpty()){
            $lastEl = end($this->stack);
            array_pop($this->stack);
            return $lastEl;
        }
        else 
            throw new Exception("Stack is empty");
    }

    private function isEmpty(){
        return empty($this->stack);
    }

    private function isFull(){
        return count($this->stack) == $this->limit;
    }
}


$st = new Stack(3, []);
$st->push(1);
$st->print();
$st->push(2);
$st->print();
$st->push(3);
$st->print();

$st->pop();
$st->print();
$st->pop();
$st->print();
$st->pop();
$st->print();
$st->pop();
