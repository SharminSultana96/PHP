<?php

$amount = 500.00;

$output = str_pad($amount, 20, "0", STR_PAD_LEFT);

echo $output;

$string = "Bangladesh";

echo str_pad($string, 20, "#=", STR_PAD_BOTH);

?>