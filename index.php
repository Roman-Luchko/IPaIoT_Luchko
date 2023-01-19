<?php
$file = fopen("tester.txt", "w");
fwrite($file,$a);
fclose($file);
$file = fopen("tester.txt", "r");
$a=fread($file,filesize("tester.txt"));
fclose($file);
?>
