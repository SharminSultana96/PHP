<?php

// $foods = array("pasta", "steak", "fish", "potatoes", "burger", "pizza", "steak", "kacci");
$foods = array("pasta", "steak", "fish", "potatoes", "burger", "pizza", "steak", "kacci", 100, 150);

echo "<pre>";
// $food = preg_grep("/(p)/", $foods);
// $food = preg_grep("/[^0-9]/", $foods);
// $food = preg_grep("/[0-9]/", $foods);
$food = preg_grep("//", $foods);

print_r($food);

?>