<?php
// // Initiate session and create a few session variables
session_start();
//     // Set a few session variables.
//     $_SESSION['username'] = "jason";
//     $_SESSION['loggedon'] = date("M d Y H:i:s");
//     $_SESSION['age'] = 25;
//     // Encode all session data into a single string and return the result
//     // session_destroy();
//     $sessionVars = session_encode();
//     echo $sessionVars;



$sessionVars = session_encode();
echo $sessionVars;
print_r($_SESSION);
session_unset();
    ?>