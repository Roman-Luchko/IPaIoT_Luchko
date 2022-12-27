<?php
$text = fopen("text.txt","w");
fwrite($text,"ggg\n");
fwrite($text,"ddd\n");
fclose($text);

$text = fopen("text.txt",'r');
$result = fgets($text);
echo $result;
fclose($text);
?>

