<!-- printf function starts -->
<?php 
$distance = 200;
$place = "Padma Bridge";

printf("Dhaka to %s is total %d km", $place, $distance);
echo "<br>";
?>
<hr>

<?php
$meal = "Bakarkhani";
$price = 180.568459;

printf("Today is %s is total price is Taka%.2f", $meal, $price);
echo "<br>";

printf("Today is %s is total price is Taka%.f", $meal, $price);
echo "<br>";

// printf function ends

// <!-- sprintf function starts -->

// $cost = sprintf("$%.2f", 43.2); //$cost = $43.20;
// echo $cost;
$output = sprintf("Today is %s is total price is Taka%.2f", $meal, $price);
echo $output;
?>
