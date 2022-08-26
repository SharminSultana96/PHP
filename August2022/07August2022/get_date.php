<?php

echo time();
$result = getdate(1659865457);
echo "<pre>";
print_r($result);

echo "Today's day is " . $result['mday'] . "<br>" . "Month is " . $result['month'];
echo "<br>";

echo date("Y-m-d", time()) . "<br>";
echo date("Y-m-d h:m:sa", 1659865457);

?>