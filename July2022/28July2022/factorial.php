<?php

// function factorial($n){
//     if($n==0){
//         return 1;
//     }else{
//         return $n * factorial($n-1);
//     }
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <?php
    // if(isset($_POST['check'])){
    //     echo factorial($_POST['num']);
    // //     $fact = factorial($_POST['num']);
    // //     $output = $fact;
    // //     echo $output;
    // }

    ?>
<!-- 
    <h3>Factorial Number</h3>
    <form action="" method="post">
    <input type="text" name="num" placeholder="Enter number">
    <input type="submit" name="check" value="CHECK">
    
</form>

</body>
</html> -->





<?php
function factorial($n){
    if($n==0){
        return 1;
    }else{
        return $n * factorial($n-1);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['check'])){
        echo factorial($_POST['num']);
    }

    ?>

    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter number">
        <input type="submit" name="check" value="CHECK">

    </form>
</body>
</html>