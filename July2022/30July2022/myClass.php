<?php
class parentClass{}
    class childClass extends parentClass{}
        $obj = new childClass();

        if($obj instanceof childClass){
            echo "The object is childClass<br>";
        }
        if($obj instanceof parentClass){
            echo "The object is parentClass<br>";
        }




?>