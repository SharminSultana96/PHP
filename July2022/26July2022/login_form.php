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
        $userName = $_POST['login'];
        $userEmail = $_POST['email'];
        
        echo $userName . "<br>";
        echo $userEmail . "<br>";

        if(strlen($userName)>8 || strlen($userName)<4){
            echo "Invalid  userName name<br>";
        }else{
            echo "Valid  userName name<br>";
        }

        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
            echo "Valid userEmail Address<br>";
        }else{
            echo "Invalid userEmail Address<br>";
        }
    }
    ?>
    <h2>Login Form</h2>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Enter Login Name"><br>
        <input type="text" name="email" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="LOGIN"><br>
    </form>
</body>
</html>