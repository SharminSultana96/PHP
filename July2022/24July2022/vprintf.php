<?php
    $players = array();

    $players[] = array("Tamim", "Shakib", "Rahim");
    $players[] = array("Sangakara", "Dilshan", "Mahela");
    $players[] = array("Smith", "Maxwell", "Warner");

    echo "<pre>";
    print_r($players);

    foreach($players as $player){
    vprintf("Player1: %s Player2: %s Player3: %s <br>", $player);
    }
?>