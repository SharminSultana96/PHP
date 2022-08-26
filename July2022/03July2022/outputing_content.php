<?php
    $title = "My page title";
    $body = "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Corporis inventore incidunt officiis excepturi voluptas praesentium 
    impedit beatae sunt! Rerum, aspernatur!</p>";

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php echo $body; ?>
    <hr>
    <?php echo "I want to show {$title} and {$body}"; ?>
    <?php echo "I want to show $title and $body"; ?>
    <?php $x = 10;

    echo "{$x}_abc";

    ?>

</body>
</html>