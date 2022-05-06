<?php
include "StackArray.php";
class StackArrayMain {
    function main() {
        $stackarray = new StackArray(5);
        $stackarray->push(10);
        $stackarray->push(20);
        $stackarray->push(30);
        $stackarray->displayStackElements();
        $stackarray->peek();
        $stackarray->pop();
        $stackarray->displayStackElements();
        $stackarray->peek();
    }
}
$main = new StackArrayMain();
$main->main();