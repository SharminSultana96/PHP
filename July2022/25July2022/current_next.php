<?php
    $fame = array(
        "Bogura"=>"Cart",
        "Cumilla"=>"Malai",
        "Sylhet"=>"Tea",
        "Dhaka"=>"Bakorkhani",
        "Rajshahi"=>"Mango",
    );
        // echo value($fame);
        // next($fame);
        // echo value($fame);

    while($value = current($fame)){
        echo $value . "<br>";
        next($fame);
    }

?>