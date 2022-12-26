<?php
$file = fopen('text.txt',"w+");
fwrite($file,"Hello World\r\n");
fclose($file);
echo 'hhh';
?>
