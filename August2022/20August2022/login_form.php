<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            border: 1px solid blue;
            padding: 25px;
            font-size: 16px;
            background-color: red;
            width: 200px;
        }
        .success{
            width: 200px;
            padding: 25px;
            font-size: 16px;
            background-color: green;
        }
    </style>
</head>
<body>
    <?php

        if($_SERVER['REQUEST_METHOD']=='POST'){
        $login = $_POST['login'];
        $email = $_POST['email'];

        $errors = array();

        if($login==''){
            $errors[] = "Login must be filled up";
        }

        if($email==''){
            $errors[] = "Email must be filled up";
        }

        // echo $login . "<br>";
        // echo $email . "<br>";
    
            if(strlen($login)>8 || strlen($login)<4){
                $errors[] = "Login must be 4 to 8";

            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[] = "Valid email must";
            }
            

            if(count($errors)>0){
                echo "<ul class = 'error'>";
                foreach($errors as $err){
                    echo "<li>$err </li>";
                }
            echo "</ul>";
            }else{
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['email'] = $email;

                echo "<div class=\"success\">Login Successfull</div>";
                echo "<a href=\"home.php\">Home Page</a>";
            }
    }

    ?>
    <h2>Login Form</h2>
    <form action="" method="post">
        <input type="text" name="login" value="<?php if(isset($login)) echo $login; ?>" placeholder="Enter Login Name"><br>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="LOGIN"><br>
    </form>
</body>
</html>