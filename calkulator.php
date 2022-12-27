<?php

$text = fopen("text.txt",'w');
fwrite($text,"ggg ttt 5");
fclose($text);
$text = fopen("text.txt",'r');
$result = fgets($text);
$result = explode(" ",$result);
print_r($result);
fclose($text);
?>
