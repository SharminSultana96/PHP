<?php

$email = "admin@gmail.com";
// echo strstr($email, "@");
$string = strstr($email, "@");

// echo ltrim($string, "@");
echo trim($string, "@");

?>