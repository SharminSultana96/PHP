<?php

$path = "E:\xampp\htdocs\WDPF\PHP\02August2022\myfile.txt";
// $output = dirname($path);
$output = pathinfo($path);
// $output = basename($path, ".txt");
// echo $output (full directory path)
echo "<pre>";
// print_r($output);

echo $output['dirname'];
echo "<br>";
echo $output['basename'];
echo "<br>";
echo $output['filename'];
echo "<br>";
echo $output['extension'];
echo "<br>";

?>