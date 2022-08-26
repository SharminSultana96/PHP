<?php

function check_vowel($ch) 
{ 
if ($ch == 'a' || $ch == 'e' ||  $ch == 'i' || $ch == 'o' ||  $ch == 'u') 
  echo "$ch is aVowel" ; 
else
  echo "$ch is a Consonant"; 
} 
check_vowel('E');

?>