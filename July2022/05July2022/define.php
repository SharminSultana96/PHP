<?php
// creating constant
define("IDB", 123);

echo IDB;

// define("IDB", 456);
// its not including a new define value because its a constant 

define("ANIMALS", array("DOG", "CAT", "MONKEY"));

// echo ANIMALS[3] = "SNAKE";
// echo ANIMALS[0] = "SNAKE";

echo "<br>";
echo ANIMALS[0];


?>