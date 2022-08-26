<?php
    $file = "../PHP_practice_midTerm(PHP,OOP).docx";

        $bytes = filesize($file);
        $kb = round($bytes/1024, 2);

        $filename = basename($file);

        echo "My file name is $filename and it's size is in byte $bytes and in kilobytes $kb";

    // echo basename($file);

?>