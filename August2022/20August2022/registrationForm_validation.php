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
    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="email" name="email"  placeholder="Enter Email"><br><br>
    <input type="password" name="pass"  placeholder="Enter Password"><br><br>
    <input type="password" name="repass" placeholder="Enter Re-Password"><br><br>
    <input type="submit" name="submit" value="SUBMIT"><br>

    </form>


    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);

        // if($$name=='' || $email=='' || $pass=='' || $repass==''){
        //     echo "<h2>Fill up the form</h2>";
        // }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        $errors = array();

        if($name==''){
            $errors[] = "<h2>Enter your name first</h2>";
        }

        if($email==''){
            $errors[] = "<h2>Enter your email</h2>";
        }

        if($pass==''){
            $errors[] = "<h2>Enter your pass</h2>";
        }

        if($repass==''){
            $errors[] = "<h2>Enter your repass</h2>";
        }

        if(strlen($pass)>=4 && strlen($pass)>=8){
            echo "<h3>Password Validated</h3>";
        }
    }
    ?>
</body>
</html>