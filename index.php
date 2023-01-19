<?php
$b = $_GET["vlhkost"];
$file = fopen("tester.txt", "w");
fwrite($file,$b);
fclose($file);
$file = fopen("tester.txt", "r");
$a=fread($file,filesize("tester.txt"));
fclose($file);
echo "a:".$a;
?>
