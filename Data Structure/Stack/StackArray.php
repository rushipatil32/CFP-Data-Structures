<?php
class StackArray {

    protected $top;
    protected $stackArray;
    protected $size;

    function __construct($size) {
        $this->top = -1;
        $this->stackArray =array();
        $this->size =$size;
    }

    function isStackEmpty() {
        if ($this->top == -1)
        return true;
        return false;
    }

    function push($data) {
        if (self::isStackEmpty()){
            $this->stackArray[++$this->top]= $data;
        } else {
            echo "Stack is full";
        }
    }
    function pop() {
        if (self::isStackEmpty()) {
            echo "stack is empty";
        } else {
            echo "popped element".$this->stackArray[$this->top--];
        }
    }
    
    function peek() {
        if (self::isStackEmpty()){
            echo "stack is empty";
        }else {
            echo "top most element". $this->stackArray[$this->top];
        }
    }
    function displayStackElements(){
        echo "Stack elements are \n";
        for ($i = $this->top; $i>=0 ; $i--){
            echo $this ->stackArray[$i]. " ";
        }
    }
}