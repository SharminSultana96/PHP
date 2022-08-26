<?php

class Employee
{
 private $name;
 private $title;
 protected $wage; //child class bananor jonno naoa hoache ..and aeta sub class child dea access kora jabe otherwise na
 public function getName() {
 return $this->name;
 }
 public function setName($name) {
 $this->name = $name;
 }
 public function sayHello() {
 //echo "Hi, my name is {$this->getName()}."; //aevabeo kora jae
 echo "Hi, my name is " . $this->getName() . ".";
 }
}

// $obj = new Employee();  //object handler. -> this sign is called object access operator

// $obj->setName("Rabbany"); //setName aekhane function setName ka call kora holo
// //print_r($obj);

// echo $obj->getName(); //just name ta asbe Rabbany

// $obj->sayHello();

//child class banano extends word dea
$obj = new Employee();  

$obj->setName("Rabbany");

class programmer extends Employee{ //programmer name e akta function naoa holo extends dea class employee er sub class hesebe
    public function bonus($percent){
        $amount = $this->wage * $percent/100;
        return $amount;
    }
}


?>