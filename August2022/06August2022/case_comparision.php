<?php

$email1 = "admin@gmail.com";
// $email2 = "ADMIN@GMAIL.COM";
$email2 = "ADMIN@YGMAIL.COM";

// echo strcasecmp($email1, $email2);

if(! strcasecmp($email1, $email2))
    echo "The email addresses are identical!";

?>