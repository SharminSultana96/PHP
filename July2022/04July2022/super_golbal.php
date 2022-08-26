<h1>$_SERVER superGlobal</h1>
<?php
echo "<pre>";
// print_r($_SERVER);

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

?>

<h1>$_GET superGlobal</h1>
<a href="http://localhost/WDPF/PHP/04July2022/super_golbal.php?name=Sharmin&phone=01879321765&age=26">Click Here</a>  
<!-- absolute position -->
<a href="super_golbal.php?name=Sharmin&phone=01879321765&age=26">Click Here</a>  
<!-- relative position -->

<?php


// print_r($_GET);
echo $_GET['name'];
echo "<br>";
echo $_GET['phone'];
echo "<br>";
echo $_GET['age'];

$_GET['today'] = 'Monday';

print_r($_GET);


?>