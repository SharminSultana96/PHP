<?php

echo getservbyname("imap", "tcp") . "<br>";
// echo "<br>";
echo getservbyname("ssh", "tcp") . "<br>";
// echo "<br>";
echo getservbyport("80", "tcp");
// portocol(tcp)
?>