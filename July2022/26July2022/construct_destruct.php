<?php

class oop {
    private $name;
    public function __construct($x){
        $this->name = $x;
        echo $this->name . " Yes, It's me the object OOP. I am here<br>";
    }
    public function sayHello(){
        echo "Hello World!<br>";
    } 
    public function __destruct(){
        echo "OOP Object Says bye bye!";
    }
}

// new oop;
$ob = new oop("Sharmin");
$ob->sayHello();
?>