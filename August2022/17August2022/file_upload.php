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
        // $time = time();

        $ext = explode(".",$name);
        echo strtolower(end($ext));

        // $newname = $time.".".$ext;
        $type = $_FILES['file']['type'];
        $tmp = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        $size = $_FILES['file']['size'];
        
    // $info = getimagesize($tmp);
    // echo "<pre>";
    // print_r($info);
        $errors = array();
        $filetype = array("pdf","jpg","png","docx");
        

        // if($size>1024*400){
        //     $errors[] = "file size must be within 400KB";
        //     echo "<br>";
        // }
        if(!in_array($ext,$filetype)){
            $errors[] = "file type must be pdf or jpg or png or docx";
        }
        
        // $measure = 'width="200" height="200"';
        // if($measure!=$info[3]){
        //     $errors[] = "Width and Height must be 200X200"; 
        // }
        if(count($errors)>0){
            foreach($errors as $err){
            echo $err . "<br>";
        }
        echo "<br>";
        
        }else {
            $result = move_uploaded_file($tmp,'uploads/'. $name);

            if($result==1){
                echo "Uploaded Successfully";
                echo "<img src='uploads/$name'>";
            }
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>

</body>
</html>