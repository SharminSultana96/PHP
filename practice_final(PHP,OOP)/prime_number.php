<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Number</h1>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter Number">
        <input type="submit" name="check" value="CHECK">
    </form>
</body>
</html>
<br>
<?php
if(isset($_POST['check'])){
    $n = $_POST['num'];
    echo prime_number($n);
}

    function prime_number($n){
        if($n==1){
            return $n . " is not a prime number";
        }else if($n==2){
            return $n . " is a prime number";
        }else{
            for($i=2; $i < $n; $i++){
                if($n%$i==0){
                    return $n . " is not a prime number";
                }
            }
            return $n . " is a prime number";
        }
    }
?>