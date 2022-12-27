<?php
$text = fopen("text.txt","w");
fwrite("ggg");
fclose($text);

$text = fopen("text.txt",'r');
echo $text;
fclose($text);
?>

