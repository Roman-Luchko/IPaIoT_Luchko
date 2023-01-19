<?php
$a = $_GET["vlhkost"];
$file = fopen("tester.txt", "w");
fwrite($file,$a);
fclose($file);
$file = fopen("tester.txt", "r");
echo "a".$file;
fclose($file);
?>
