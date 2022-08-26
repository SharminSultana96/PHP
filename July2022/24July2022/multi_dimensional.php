<?php

    $players = array();

    $players["Bangladesh"] = array("Tamim", "Sakib", "Rahim");
    $players["Srilanka"] = array("Sangakara", "Mahela", "Dilshan");
    $players["Australia"] = array("Smith", "Maxwell", "Warner");

    // echo "<pre>";
    // print_r($players);


   

    foreach($players as $country=>$player){
        echo "<h1>$country</h2>";
       

        foreach($player as $pl){
            
            echo $pl . ", ";
        }
            echo "<br>"; 
        }


?>