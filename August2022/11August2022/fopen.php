<?php
$file = fopen("test.txt", "r");


echo filesize("test.txt");

echo fgets($file, 80). "<br />"; //ongso beses anar jonno fgets

fclose($file);