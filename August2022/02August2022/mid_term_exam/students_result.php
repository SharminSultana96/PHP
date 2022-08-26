<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Students Result</h2>
<form action="" method="post">
        <input type="text" name="id">
        <input type="submit" name="search" value="SEARCH">
    </form>
</body>
</html>

<?php
  if(isset($_POST['search'])){
    $sid = $_POST['id'];
    $std1 = new student;

    echo $std1->rseult($sid);
}

    class student{
        public $id;
        public $name;
        public $batch;
        public $lines;

        public function __construct(){
            $lines = file('results.txt');
            $this->lines = $lines;
            
        }
    public function rseult($sid) {
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

?>