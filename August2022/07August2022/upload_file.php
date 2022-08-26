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

            $name = $_FILES['file']['name'];
            $type = $_FILES['file']['type'];
            $tam = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error'];
            $size = $_FILES['file']['size'];
            $ext = explode('.', $name);
            echo $ext = strtolower(end($ext));

            $filetypes = array('jpg', 'png');
            $error = array();
        }

    ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="UPLOAD">

</form>
</body>
</html>