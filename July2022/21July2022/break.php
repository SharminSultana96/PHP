<?php

    // echo rand(1,50);
    $numbers = array(5, 15, 20, 30);
    echo $randnumber = rand(1,50);
    echo "<br>";
    echo in_array($randnumber, $numbers);

?>
<hr>

<?php
$primes = array(2,3,5,7,11,13,17,17,23,29,31,37,41,43,47);
$randnumber = rand(1,50);

for($i=1; $i<100; $i++){
    echo "<h3>$i</h3>";
    if(in_array($randnumber, $primes)){
        echo "Found my prime number $randnumber";
        break;
    }else{
        echo "Not Found $randnumber in prime list";
        // break;
    }
    
}

?>