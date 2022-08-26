<?php
    echo " ID: " . $_POST['id'] . "<br>";
    echo " Name: " . $_POST['name'] . "<br>";
    // echo " Total Salary: " . $total = $_POST['basic'] + $_POST['houserent'] + $_POST['transport'];

    $total = $_POST['basic'] + $_POST['houserent'] + $_POST['transport'];
    echo " Total Salary: " . $total;
?>