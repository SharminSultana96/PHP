<?php

$fh = fopen("article_contents.txt", 'r');

echo fread($fh, filesize('article_contents.txt'));

?>