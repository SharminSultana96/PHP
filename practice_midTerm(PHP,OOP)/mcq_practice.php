<?php
    // function userProfile(){
    //     $user[] = "Sharmin";
    //     $user[] = "sharminsultana9888@gmail.com";
    //     $user[] = "01879321765";

    //     return $user;
    // }
    // list($name, $email, $phone) = $userProfile();
    // echo "Name:$name, Email:$email, Phone:$phone";

    // Ans: Undefined variable
?>

<?php
    // $customers = array();

    // $customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
    // $customers[] = array("Jasse James", "jesse@example.net", "818-999-9999");
    // $customers[] = array("Doland Duck", "doland@example.org", "212-999-9999");

    // foreach($customers as $customer){
    //     vprintf("<p>Name:%s<br />Email:%s<br />Phone:%s</p>",$customer);
    // }

    // Ans: All of above
?>

<?php
    // $array = array(10,20,30,40);
    // echo "<pre>";
    // print_r(array_pad($array,-8,0));

// Ans: 
// Array(
//     [0] => 0
//     [1] => 0
//     [2] => 0
//     [3] => 0
//     [4] => 10
//     [5] => 20
//     [6] => 30
//     [7] => 40
// )
?>

<?php
    // $foods = array("pasta", "steak", "fish", "potatoes");
    // $food = preg_grep("/^s/", $foods);
    // print_r($food);

    // Ans: Array ( [1] => steak )

?>

<?php
    // echo str_pad("Salad", 5)." is good.";

    // Ans: Salad is good

?>

<?php
    
    // echo "<pre>";
    // $states = array("Alabama", "Alaska", "Arizona", "Arkanasa", "Dhaka", "Noakhali");
    // $subset = array_splice($states, 3, -2, array("Gazipur"));
    // // $subset = array_splice($states, 3, 2, array("Gazipur"));


    // print_r($states);
    // print_r($subset);

//     Ans:
//     Array(
//     [0] => Alabama
//     [1] => Alaska
//     [2] => Arizona
//     [3] => Gazipur
//     [4] => Dhaka
//     [5] => Noakhali
// )
// Array
// (
//     [0] => Arkanasa
// )

?>

<?php
// $input = "Swapna<td>Lawrence</td>you are really<i>pretty</i>!";

// $input = strip_tags($input,"<i></i>");

// Ans: "Swapna Lawrence you are really<i>pretty</i>!";

?>


<?php    
// $op2 = "blabla";              
// function foo($op1) {       
//  echo $op1;        
//  echo $op2;
// }    
// foo("hello");  

// Ans: hello
?>
<br>

 <?php    
// function calc($price, $tax="") {
//     $total = $price + ($price * $tax);
//         echo "$total";    
//     }    

// calc(42);        

// Ans: 42
?>
<br>


<?php
    // $price = 10; $tax = 5;
    // function calcSalesTax($price, $tax){
    //     $total = $price + ($price * $tax);
    //     echo "Total cost: $total";
    // }
    // calcSalesTax($price, $tax);


?>
<br>

<?php
// function zz(& $x) {
// $x=$x+5;
// }
// $x=10;
// zz($x);
// echo $x; 

// Ans: 15

?>
<br>
<?php
// function add(){

// STATIC $n=15; 
// $n = $n + 5; 
// echo $n;

// }

// add();

// add();

// Ans: 2025

?>
<br>

<?php
// function add(){

// STATIC $n= 5; 
// $n = $n + 5; 
// echo $n;

// }

// add();

// Ans: 10

?>

<?php    
// function a() {        
//       function b() {    
//             echo 'I am b'; 
//         }

//         echo 'I am a';    
// }    
// a();       
?>


<?php        
// function foo($msg) {            
//    echo "$msg";        
// }        
// $var1 = "foo";        
// $var1("will this work");

// Ans: will this work
?>


<?php    
// function calc($price, $tax)	    {        
// $total = $price + $tax;    
// }    
// $pricetag = 15;    
// $taxtag = 3;    

// calc($pricetag, $taxtag);	    
?>


<?php
// function calcSalesTax($price, $tax=.03){

//     $total = $price + ($price * $tax);
    
//     echo "Total cost: $total";
    
//     }
    
//     $price = 10;
    
//     calcSalesTax($price);

// Ans: 10.30
?>
<br>

<?php
// function calcSalesTax($price, $tax=.02){

//     $total = $price + ($price * $tax);
    
//     echo "Total cost: $total";
    
//     }
    
//     $price = 10;
    
//     calcSalesTax($price);

// Ans: 10.20
?>
<br>
<?php
// function my_func($variable) {
//    return(is_numeric($variable) && $variable % 2 == 0);
// }
?>  