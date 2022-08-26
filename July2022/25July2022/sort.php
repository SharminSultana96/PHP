<?php

$cities = ["Dhaka", "Chandpur", "Khulna", "Rangpur", "Bogura"];
echo "<pre>";
print_r($cities);


sort($cities);
print_r($cities);


$numbers = [5, 15, 28, 100, 7, 24, 357];
sort($numbers);
print_r($numbers);


$divisions = array("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsha", "Chandpur"=>"Meghna", "Rajshahi"=>"Padma");

    sort($divisions);
    print_r($divisions);



?>