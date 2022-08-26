<?php
    $path = "myfile.txt";

    echo $output = realpath($path);
    echo "<br>";

    $path1 = "../27July2022/results.txt";
    
    echo realpath($path1);

    $sharmin = "../../sharmin.txt";
    echo realpath($sharmin);

?>