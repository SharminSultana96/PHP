<?php
if(isset($_POST['search'])){
    $maxNumber = $_POST['num'];
}
function largestNumber(){
    $numbers = array(59, 87, 120, 33, 92);
    $max = 0;
    for($i = 0; $i < count($numbers); $i++){
        if($numbers[$i] > $max){
            $max = $numbers[$i];
        }else{
            $max = $max;
        }
    }
    return $max;

}
echo largestNumber();

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
    <form action="" method="post">
        <input type="number" name="num" placeholder="Enter Number">
        <input type="sumbit" name="search" value="SEARCH">
    </form>
</body>
</html>