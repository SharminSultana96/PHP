<!-- <h1>GET OR POST</h1>
<hr>
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
// // echo "<pre>"; 
// // $_REQUEST = $_POST OR $_GET
// // print_r($_GET);
// print_r($_REQUEST);
// // print_r($_POST);

// // $email = $_POST['email'];
// // $pass = $_POST['pass'];
// // $email = $_GET['email'];
// // $pass = $_GET['pass'];
// $email = $_REQUEST['email'];
// $pass = $_REQUEST['pass'];
// echo "You wanted to login with your email {$email} and password {$pass}";

?>


    <h1>Login Form</h1>
     <form action="" method="POST"> -->
<!-- <form action="submit.php" method="get">
    <input type="text" name="email" placeholder="Enter Email">
    <br><br>
    <input type="password" name="pass" placeholder="Enter Password">
    <br><br>
    <input type="submit" name="login" placeholder="Login"><br>
</form>


</body>
</html>  -->


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
print_r($_POST);
$email = $_POST["email"];
$pass = $_POST["pass"];
echo "You login with your email {$email} and password {$pass}";
?>
    <form action="submit.php" method="post">
        <input type="text" name="email" placeholder="Enter Email"><br><br>
        <input type="password" name="pass" placeholder="Enter Password"><br><br>
        <input type="submit" name="submit" placeholder="Login"><br><br>
    </form>
</body>
</html>