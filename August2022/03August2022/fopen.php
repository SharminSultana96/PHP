<?php

    // $file = "mytextfile.txt";
    // $fh = fopen($file, "r");

    // // print_r($fh);
    // // echo fgets($fh);

    // while(!feof($fh)){
    //     echo fgets($fh). "<br>";
    // }

    // fclose($fh);

?>
<hr>

<?php

    // $file = "mytextfile.txt";
    // $fh = file($file);

    // print_r($fh);
    // // echo fgets($fh);


?>

<?php

    $file = "mytextfile.txt";
    $fh = fopen($file, "w");

    fwrite($fh, "I want to write something\n"); 

    fwrite($fh, "I want to write something\n");

    fwrite($fh, "I want to write something\n"); 

    
    $file = file($file);

    print_r($file);

    fclose($fh);    
    // echo fgets($fh);


?>