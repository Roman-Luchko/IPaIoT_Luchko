<?php 
$a = $_GET['a'];
echo 'A je '.$a;
$file = fopen("g.txt","a");
fwrite($file,$a);
fclose($file);
?>
