<?php
$text = fopen("text.txt","w");
fwrite($text,"ggg tt i\n");
fwrite($text,"ddd\n");
fclose($text);

$text = fopen("text.txt",'r');
$result = fgets($text);
$result = explode(" ",$result);
print_r($result);
fclose($text);
?>

