<?php
    array("Ahsan Manjil", "Lalbagh Fort", "Sonargoan", "Buriganga River");

    echo current($spots); echo "<br>";
    next($spots);
    echo next($spots);
    echo current($spots); echo "<br>";
    prev($spots);
    echo current($spots); echo "<br>";
    end($spots);
    echo current($spots); echo "<br>";
    reset($spots);
    echo current($spots); echo "<br>";
?>