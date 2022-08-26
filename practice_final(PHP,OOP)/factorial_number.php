<?php
if(isset($_POST['check'])){
    echo factorial($_POST['number']);
}
    function factorial($n){
        if ($n==0) {
            return 1;
        }else{
            return $n * factorial($n-1);
        }
    }

?>

<h1>Factorial!</h1>
<form action="" method="post">
    <input type="text" name="number" placeholder="Enter Number">
    <input type="submit" name="check" value="CHECK">
</form>