<?php
class Appliance {
public $age;
public $name;

public function setDetails($age, $name){
    $this->age = $age;
    $this->name = $name;
}

}

$fridge = new Appliance();

$fridge->setDetails(10, "Singer");
print_r($fridge);

echo "<br>";

var_dump($fridge);


?>