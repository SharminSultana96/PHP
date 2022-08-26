<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <input type="submit" name="submit" value="UPLOAD">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $name = $_FILES['file']['name'];
            $ext = explode('.', $name);
            $ext = strtolower(end($ext));

            $type = $_FILES['file']['type'];
            $tmp = $_FILES['file']['tmp_name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
            
            $errors = array();

            $filetype = array("pdf", "png", "jpg", "docx");

            if(!in_array($ext,$filetype)){
                $errors[] = "File type must be pdf or png or jpg or docx";
            }

            if($size>1024*100){
                $errors[] = "File type must be 100kb";
            }

                if(count($errors)>0){
                    foreach($errors as $err){
                        echo $err . "<br>";
                    }
                    echo "<br>";
                }

                else{
                    $result = move_uploaded_file($tmp,'uploads/'.$name);

                    if($result==1){
                        echo "<h1>File Uploaded Successfully<h1>";
                        echo "<img src='uploads/$name'>";
                    }
                }
        }
    ?>
</body>
</html>