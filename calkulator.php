<?php
$file = fopen('text.txt',"w+");
fwrite($file,"Hello World\r\n");
fclose($file);
$f = fopen('text.txt',"r");
$ftext = fgets($f, 999);
echo $ftext."";
echo 'hhh';
?>
