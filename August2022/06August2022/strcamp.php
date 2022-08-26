<?php

$str1 = "Abcd123456";
$str2 = "ABCD";

echo strcasecmp($str1, $str2);
?>
<br>


<?php
$pswd = "supersecret";
$pswd2 = "supersecret2";
if(strcasecmp($pswd, $pswd2) != 0) {
    echo "Password do not match!";
}else{
    echo "passwords match!";
}
?>