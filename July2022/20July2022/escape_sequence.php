<?php
// $output = "This is one line. \n And this is another line.<br>";
// $output1 = 'This is one line. \n And this is another line.<br>';    // n = new line
// $output2 = 'This is one line.' . "\n" . 'And this is another line.';

$output = "This is one line. \r And this is another line.<br>";
$output1 = 'This is one line. \n And this is another line.<br>';     // r = carrage return
$output2 = 'This is one line.' . "\r" . 'And this is another line.';

// $output = "This is one line. \t And this is another line.<br>";
// $output1 = 'This is one line. \t And this is another line.<br>';     // t = tab
// $output2 = 'This is one line.' ."\t" .'And this is another line.';


echo $output;
echo $output1;
?>

<?php

$students = array("Dipu"=>"Barisal", "Rabbany"=>"Thakurgaon");

// echo $students['Dipu'];
echo "Dipu's home district is " . $students['Dipu'] . "<br>";
echo "Dipu's home district is {$students['Dipu']}";

?>
