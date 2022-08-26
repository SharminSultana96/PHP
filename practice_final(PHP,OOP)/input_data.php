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
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id = $_POST['id'];
        $number = $_POST['phone'];

        $output = "$name"." ". "$email"." ". "$id"." ". "$number". "\n";

        // echo $output;
        $file = fopen("info.txt", "a"); //a means appent..appent er madhome cursor last e thake jar madhome next data entry te neche new line e add hobe 
        fwrite($file, $output);

        fclose($file);
    }

    


    ?>
    <h1>Data Collecting</h1>
    <form action="" method="post">
        <table>
            <tr>
            <td><label for="">Name: </label></td>
            <td><input type="name" name="name" placeholder="Enter Your Name"></td>
            </tr>

            <tr>
                <td><label for="">Email ID: </label></td>
                <td><input type="email" name="email" placeholder="Enter Your Email ID"></td>
            </tr>
            <tr>
                <td><label for="">ID: </label></td>
                <td><input type="text" name="id" placeholder="Enter Your ID Number"></td>
            </tr>
            <tr>
                <td><label for="">Phone Number: </label></td>
                <td><input type="number" name="phone" placeholder="Enter Your Phone Number"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>

        
        </table>
    </form>

    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>

        <?php
        $file1 = file("info.txt");

        foreach($file1 as $line){
            list($id, $name, $email, $number) = explode(" ", $line);
            echo "<tr>


            
            <td>$id</td>
            <td>$name</td>
            <td>$email</td>
            <td>$number</td>
            
            
            
            
            </tr>";
        }
    
     
      
        ?>
    </table>
</body>
</html>