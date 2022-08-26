<?php
class Employee {
     private $name;
     function setName($name) {   
        $this->name = $name;
    }  
    function getName() {
        return $this->name;
    }
}

$emp1 = new Employee();
$emp1->setName('Rabbany');
$emp2 = $emp1;
// $emp2 = clone $emp1;
$emp2->setName('Tokey');
// echo "Employee 1 = {$emp1->getName()}\n";
// echo "Employee 2 = {$emp2->getName()}\n";

print_r($emp1);
echo "<br>";
print_r($emp2);
?>