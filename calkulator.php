<?php
$file = fopen('text.txt',"a+");
fwrite($file,"Hello Worl\r\n");
fclose($file);
$f = fopen('text.txt',"r");
$ftext = fgets($f, 999);
echo $ftext."";
echo 'hhh';
echo file_get_contents("text.txt");
echo 'ddd';
?>
