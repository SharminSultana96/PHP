<?php

$http = fsockopen("www.example.com",80);

$req = "GET / HTTP/1.1\r\n";
$req .= "Host: www.prothomalo.com\r\n";
$req .= "Connection: Close\r\n\r\n";

fputs($http, $req);

while(!feof($http)){
    echo fgets($http, 1024);
}
fclose($http);
?>