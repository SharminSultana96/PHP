<h2>Employee Information</h2>
<?php
    echo "ID: " . $_POST['id'] . "<br>";
    echo "Name: " . $_POST['name'] . "<br>";
    $total = $_POST['basic'] + $_POST['rent'] + $_POST['transport'];
    echo "Total Salary: " . $total;
?>