<?php

    $subjects = array("PHP", "Java", "Oracle", "Python", "C#");

    foreach($subjects as $sub){
    echo "$sub is my subject <br>";
    }

?>
<hr>
<?php

$languages = array(
    "PHP"=>"https://www.php.net", 
    "Java"=>"https://www.java.com", 
    "Oracle"=>"https://www.oracle.com", 
    "Python"=>"https://www.python.com", 
    "C#"=>"https://www.asp.net"
);

foreach($languages as $lang){
    echo "My Language is $lang <br>";
}
echo "<br>";

foreach($languages as $lang=>$site){
    echo "My Language is $lang and it's site is $site <br>";
}
echo "<br>";

foreach($languages as $lang=>$site){
    echo "My Language is $lang and it's site is <a href=\"$site\" target=\"_blank\">$site</a>  <br>";
}
?>
<hr>

<?php

echo rand(1,50)

?>