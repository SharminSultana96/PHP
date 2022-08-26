<?php
$current = time();

$time = mktime(06, 00, 10, 1, 1, 2021);

// echo date("d-m-Y", $time);

$different = $current - $time;
// $hours = round($different/60/60);
$days = round($different/60/60/24);

// echo number_format($hours);
// echo number_format($days);
echo $days;


?>