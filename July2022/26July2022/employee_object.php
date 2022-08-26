<?php
    class Employee {
        // private $title;
        public $title = "Ms.";
        private $name;
        public const AGE = ", 20";

        public function getName(){
           return $this->name;
        }

        public function setName($x){
            $this->name = $x;
        }

        public function sayHello(){
            $msg = "{$this->name}, Welcome to OOP";
            $msg .= SELF::AGE;
            // return $msg;
            echo $msg;
        }
    }


    $obj1 = new Employee;
    echo $obj1->title;
    $obj1->setName("Sharmin");
    $obj1->sayHello();

    echo "<pre>";
    // echo "<hr>";
    // print_r($obj1);
    var_dump($obj1);
    ?>

