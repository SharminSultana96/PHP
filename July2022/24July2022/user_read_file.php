<?php
    // $file = file("users.text");
    // echo "<pre>";
    // var_dump($file);
?>


<?php
// $users = file("users.text");
// echo "<pre>";
// var_dump($users);

?>


<?php
// $users = file("users.text");
// echo "<pre>";
// var_dump($users);

?>


<?php
$users =  file("users.text");

foreach ($users as $user){
    list($usr1, $usr2, $usr3, $usr4) = explode("|", $user);
    echo "Name: $usr1<br>";
    echo "Name: $usr2<br>";
    echo "Name: $usr3<br>";
    echo "Name: $usr4<br>";
    echo "<hr>";
}
