<?php
    $districts = array("Dhaka", "Comilla", "Noakhali", "Barisal", "Khulna", "Pabna", "Narsingdi");

    $subset = array_splice($districts, 3, 2, array("Narail", "Jossore"));
    echo "<pre>";
    print_r( $subset);
    print_r( $districts);

    // $subset = array_slice($districts, 3, 2);
    // echo "<pre>";
    // print_r($subset);

    // $subset = array_slice($districts, -3);
    // echo "<pre>";
    // print_r($subset);

    ?>