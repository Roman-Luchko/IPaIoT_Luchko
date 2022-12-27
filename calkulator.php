<?php
$text = fopen("text.txt","w");
fwrite($text,"ggg");
fclose($text);

$text = fopen("text.txt",'r');
$result = fgets($text);
echo $result;
fclose($text);
?>

