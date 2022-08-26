<?php

    $data = file_get_contents("article_contents.txt");

    // echo ($data);

    $contents = explode("\n", $data);

    foreach($contents as $line){
        echo $line. "<br>";
    }
    
?>