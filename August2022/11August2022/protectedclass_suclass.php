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
public function setWage($money){
    $this->wage = $money;

}

}



//child class banano extends word dea
$obj = new Employee();  

$obj->setName("Rabbany");
$obj->setWage(10000);
// print_r($obj);

class programmer extends Employee{ //programmer name e akta function naoa holo extends dea class employee er sub class hesebe
    public function bonus($percent){
        $amount = $this->wage * $percent/100;
        return $amount;
    }
}

$obj1 = new programmer();
$obj1->setName("Rabbany");
$obj1->setWage(10000);
echo $obj1->bonus(5);

// print_r($obj1);

?>