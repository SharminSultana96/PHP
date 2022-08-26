<?php

$line = "Vims is the greatest word processor ever created! Oh vim, how I love thee!";
echo "<pre>";
// echo preg_match("/\bvim\b/", $line, $matches);
// echo preg_match_all("/\bvim\b/i", $line, $matches);
echo preg_match_all("/vim/i", $line, $matches);

print_r($matches);

?>