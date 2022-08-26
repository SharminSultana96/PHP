<?php
// echo "<pre>"; 
// $_REQUEST = $_POST OR $_GET
// print_r($_GET);
// print_r($_REQUEST);
print_r($_POST);

$email = $_POST['email'];
$pass = $_POST['pass'];
// $email = $_GET['email'];
// $pass = $_GET['pass'];
// $email = $_REQUEST['email'];
// $pass = $_REQUEST['pass'];
echo "You wanted to login with your email {$email} and password {$pass}";

// echo "<pre>";
// print_r( $GLOBALS);


?>