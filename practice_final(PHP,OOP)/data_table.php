<?php
    $countries = array(
        "Bangladesh"=>"Dhaka",
        "Pakistan"=>"Islamabad",
        "Nepal"=>"Kathmandu",
        "Australia"=>"Sedney",
        "Srilanka"=>"Colombo",
        "India"=>"Delhi"
    )
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

    <?php
        ksort($countries);
        foreach($countries as $country=>$capital){
        echo "<tr>
        <td>$country</td>
        <td>$capital</td>
        </tr>";
    }
    ?>
    </table>
</body>
</html>