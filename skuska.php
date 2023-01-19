<?php
$file = "count.txt";
$count = $_GET["count"];
echo $count;
file_put_contents ($file,$count);
?>
