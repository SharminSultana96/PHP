<?php

class student {
    public $id;
    public $name;
    public $batch;
    public $lines;

    public function __construct(){
        $lines = file('results.txt');
        $this->lines = $lines;
    }
    
    public function result($sid){
        // $this->id = $id;
        // $lines = file('results.txt');
        foreach($this->lines as $line){
            list($id, $name, $batch, $result) = explode(",", $line);
            if($id==$sid){
                $output = "<h3>ID: $id</h3>";
                $output .= "<h3>Name: $name</h3>";
                $output .= "<h3>Batch: $batch</h3>";
                $output .= "<h3>Result: $result</h3>";
            }
        }
        return $output;
    }
}
// $st1 = new student;
// $st1->result(2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['search'])){
        $sid = $_POST['id'];

        $st1 = new student;
        echo $st1->result($sid);
    } 

?>
    <h1>Result Search</h1>
    <form action="" method="post">
    <input type="text" name="id">
    <input type="submit" name="search" value="SEARCH">
</form>
</body>
</html>