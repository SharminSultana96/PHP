<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Largest Number</h2>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter Number">
        <input type="submit" name="search" value="SEARCH">
    </form>
</body>
</html>
<br>

<?php
if(isset($_POST['search'])){
    $maxNumber = $_POST['num'];
}
  function maxNumber(){
    $numbers = array(87, 98, 455, 765, 23);
    $max = 0;
    for($i=0; $i < count($numbers); $i++){
        if($numbers[$i] > $max){
            $max = $numbers[$i];
        }else{
            $max = $max;
        }
        return $max;
    }
  }
  echo maxNumber() . " is the largest number";
?>