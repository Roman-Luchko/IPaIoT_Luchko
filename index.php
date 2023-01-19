<?php
echo "try"; 
$a = $_GET["vlhkost"];
$file = fopen("r.txt",w);
fwrite($file,$a);
fclose($file);

echo "a:".$a;

?>
