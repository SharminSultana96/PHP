<?php

// $x = 100;

// $converted = (string) $x;

// var_dump($x);
// echo "<br>";
// var_dump($converted);   // scaler(boolean,string,float,integer,decimal) // compound(array,object)
// echo "<br>";

// $price = 50.60;

// $converted = (int) $price;

// var_dump($price);
// echo "<br>";
// var_dump($converted);
// echo "<br>";

// $fruits = "Mango";
// // $converted = (int) $fruits;
// $converted = (float) $fruits;
// var_dump($converted);

?>

<?php
    $miles = 125;
    $casted = (array) $miles;
    // var_dump($casted);
    echo $casted[0];

    ?>

 <?php
    // object cnversion
$car = "Toyota";
$converted = (object) $car;
// var_dump($converted);
echo $converted->scalar;

