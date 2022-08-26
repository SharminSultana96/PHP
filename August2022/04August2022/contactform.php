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
        extract($_POST);  // built-in function in php
        $to = "sharminsultana9888@gmail.com";
        if(mail($to, $subject, $message)){
            echo "Sent Sucessfully";
            // https://szhabib.idbdev.com/testmail/contact.php
        }
    ?>

    <h2>Contact with us</h2>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter Your Email"><br>
        <input type="text" name="name" placeholder="Enter Your Name"><br>
        <input type="text" name="subject" placeholder="Enter Subject"><br>
       <textarea name="message" placeholder="Enter Message"></textarea><br>
       <input type="submit" name="submit" value="SEND">
        
    </form>
</body>
</html>