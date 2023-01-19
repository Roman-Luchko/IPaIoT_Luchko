<?php
$file = "count.txt";
$count = $_GET["count"];
echo "Getting data from ESP32 and writing to file...\n";
echo $count;
file_put_contents ($file,$count);
?>
