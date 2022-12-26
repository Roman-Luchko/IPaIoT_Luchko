<?php
$file = fopen('https://github.com/Roman-Luchko/IPaIoT_Luchko/blob/main/text.txt',"a+");
fwrite($file,"Hello Worl\r\n");
fclose($file);
$f = fopen('https://github.com/Roman-Luchko/IPaIoT_Luchko/blob/main/text.txt',"r");
$ftext = fgets($f, 999);
echo $ftext."";
echo 'hhh';
echo file_get_contents("https://github.com/Roman-Luchko/IPaIoT_Luchko/blob/main/text.txt");
echo 'ddd';
?>
