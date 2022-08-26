<?php
    ini_set("date.timezone", "Asia/Dhaka");
    $file = "myfile.txt";

    // echo fileatime($file);
    $time = fileatime($file);

    echo date("h:i:s", $time);


?>