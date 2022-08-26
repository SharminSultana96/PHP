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
        if(isset($_POST['submit'])){
            // echo $_POST['myNumber'];

            $guess = 150;

            if($_POST['myNumber']==$guess){
                echo "Congratulations!";
            } else if(abs($guess-$_POST['myNumber'])<10){
                echo "You are very close";
            } else {
                echo "Sorry!";
            }

        }
?>
<h1>Guess the number</h1>
<form action="" method="post">
    <input type="text" name="myNumber" placeholder="Guess a number">
    <input type="submit" name="submit" placeholder="CHECK">
    </form>
</body>
</html>