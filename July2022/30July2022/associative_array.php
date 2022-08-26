<?php
    $countries = array("Bangladesh"=>"Dhaka", "India"=>"delhi", "Srilanka"=>"Colombo", "Australia"=>"Sedney");

    echo "<pre>";
    
    $ksort = ($countries);
    print_r($ksort);

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
   
    <table border="1">
        <tr>
            <th>Country Name</th>
            <th>Capital</th>
        </tr>

        <tr>

    <?php
    foreach($countries as $country=>$capital){ ?>
        <td><?php echo $country; ?></td>
        <td><?php echo $capital; ?></td>

    </tr>
    <?php }
    ?>

    </table>


</body>
</html>