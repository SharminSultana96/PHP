<?php
 class Visitor
 {
 private static $visitors = 0;
 function __construct()
 {
 self::$visitors++;
 }
 static function getVisitors()  //aeta post increment
 {
 return self::$visitors; // statice ager value nea dhore rakhbe tae aekhane 0 ..tar porer step e 1 hbe thn 2
 }
 }
 // Instantiate the Visitor class.
 $visits = new Visitor();
 echo Visitor::getVisitors()."<br />";
 // Instantiate another Visitor class.
 $visits2 = new Visitor();
 echo Visitor::getVisitors()."<br />"; // bar bar call er jonno er increament hoache 0 theke 1 and 1 theke 2 and :: this sign is called scope resolution
?>