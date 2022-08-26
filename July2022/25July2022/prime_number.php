<?php
//    $primes = array(2,3,5,7,11,13,17,17,23,29,31,37,41,43,47);
//    $randnumber = rand(1,50);
   
//    for($i=1; $i<100; $i++){
//        echo "<h3>$i Start</h3>";
//        if(in_array($randnumber, $primes)){
//            echo "Found my prime number $randnumber";
//            break;
//        }else{
//            echo "Not Found $randnumber in prime list";
//            // break;
//        }
//        echo "<br>End<hr>";
//    }
   

?>


<?php   
    // if(isset($_POST["submit"])){
    //     // $n = $_POST["number"];
    
    //     // echo "<br>End<hr>";
    // }

	function test_prime($n){

    if ($n===1)
    {
        return $n . "is not a prime number";
    }
    else if($n === 2){
        return $n . "is a prime number";
    }else{
        for($x = 2; $x < $n; $x++){
        if($n % $x === 0){
            return $n . "is not a prime number";
        }
        }
        return $n . "is a prime number";  
    
    }
    echo test_prime($n);
}
?>