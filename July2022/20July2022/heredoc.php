<?php

$students = array("Dipu"=>"Barisal", "Rabbany"=>"Thakurgaon");

echo <<<ABC
we have two students. One is Dipu and another is Rabbany.
Dipu's home district is {$students['Dipu']} and Rabbany's home district is {$students['Rabbany']}; <br><br>
ABC;


$dipu = "Dipu";
$rabbany = "Rabbany";
echo <<<DEF
we have two students. One is Dipu and another is Rabbany.
Dipu's home district is $dipu and Rabbany's home district is $rabbany;
DEF;

?>