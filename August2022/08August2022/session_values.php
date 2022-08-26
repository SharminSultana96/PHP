<?php

session_start();
echo "<pre>";
print_r($_SESSION);
$_SESSION['name'] = "Dipu";
$_SESSION['age'] = "25";


// unset($_SESSION['age']);

session_destroy();
?>