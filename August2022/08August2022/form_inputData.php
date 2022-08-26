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
            $id = $_POST['id'];
            $name = $_POST['name'];
            $id = $_POST['email'];
            $id = $_POST['phone'];
            $output = "$id" . "$name" . "$email" . "$phone" . "\n";
            echo "<br>";

            $file = fopen('myfile.txt', "a");

            fwrite($file, $output);

             fclose($file);
        }
    ?>

        <form action="" method="post">
            ID:<br> 
            <input type="text" name="id"><br>
            Name:<br> 
            <input type="text" name="name"><br>
            Email:<br>
            <input type="text" name="email"><br>
            Phone:<br>
            <input type="text" name="phone"><br><br>

            <input type="submit" name="submit" value="SEND">
            <input type="reset" name="reset" value="RESET">
        </form>
        <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php
            $file1 = file('myfile.txt');
            foreach($file1 as $files){
                list($id1, $name1, $email1, $phone1) = explode(' ', $files);
            echo "<tr>
                <td>$id1</td>
                <td>$name1</td>
                <td>$email1</td>
                <td>$phone1</td>
            </tr>";
    }

?>
    </table>
</body>
</html>