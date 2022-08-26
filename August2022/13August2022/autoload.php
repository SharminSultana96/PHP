<?php

    function my_autoloader($class) {
       include 'classes/' . $class . '.class.php';
    }

    spl_autoload_register('my_autoloader');

    $ev = new Events;
    echo get_class($ev);
    echo "<br>";

    echo "<pre>";
    $ev->name = "Sharmin";
    $ev->age = "26";
    $ev->qualification = "Hon's";
    print_r($ev);
    echo "<br>";

    $pat = new Patrons;
    echo get_class($pat);
    echo "<br>";

    echo "<pre>";
    $pat->name = "Sultana";
    $pat->age = "25";
    $pat->qualification = "Master's";
    print_r($pat);

?>