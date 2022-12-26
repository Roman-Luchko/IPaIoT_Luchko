<?php
$file = fopen('https://github.com/Roman-Luchko/IPaIoT_Luchko/blob/9e42a85e14bad77db15d82137ad2826f8a78a71c/text.txt',"a+");
fwrite($file,"Hello Worl\r\n");
fclose($file);
$f = fopen('https://github.com/Roman-Luchko/IPaIoT_Luchko/blob/9e42a85e14bad77db15d82137ad2826f8a78a71c/text.txt',"r");
$ftext = fgets($f, 999);
echo $ftext."";
echo 'hhh';
echo file_get_contents("https://github.com/Roman-Luchko/IPaIoT_Luchko/blob/9e42a85e14bad77db15d82137ad2826f8a78a71c/text.txt");
echo 'ddd';
?>
