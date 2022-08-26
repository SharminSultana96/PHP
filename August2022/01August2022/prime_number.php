<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="number" placeholder="Enter your number">
        <input type="submit" name="submit" value="SUBMIT">
    </form>

<?php   
    // if(isset($_POST["submit"])){
    //     // $n = $_POST["number"];
    
    //     // echo "<br>End<hr>";
    // }

    if(isset($_POST['submit'])){        
        $n = $_POST['number'];
        echo test_prime($n);
    }

	function test_prime($n){

    if ($n==1)
    {
        return $n . " is not a prime number";
    }
    else if($n==2){
        return $n . " is a prime number";
    }else{
        for($x = 2; $x < $n; $x++){
        if($n % $x==0){
            return $n . " is not a prime number";
            }
        }
            return "$n is a prime number";  
    }
}
?>
</body>
</html>
