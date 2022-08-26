<?php
    $directory = "E:";
    // echo disk_free_space($directory);
    $bytes = disk_free_space($directory);
    $t_bytes = disk_total_space($directory);
    // echo $bytes/1024/1024/1024;
    echo "Free Space: " . round($bytes/1024/1024/1024,2) . "<br>";
    echo "Total Space: " . round($t_bytes/1024/1024/1024,2) . "<br>";

?>