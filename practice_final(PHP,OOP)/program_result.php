<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Program Result</h2>
<form action="" method="post">
        <input type="text" name="grade">
        <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $n = $_POST['grade'];
        echo grade_number($n);
    }
     function grade_number($n){
        if($n=="A"){
            return "<h2>Excellent</h2>";
        }
        else if($n=="B"){
            return "<h2>Good</h3>";
        }
        else if($n=="C"){
            return "<h2>Fair</h3>";
        } else if($n=="D"){
            return "<h2>Poor</h3>";
        }else{
            return "<h2>Failure</h3>";
        }
     }
?>