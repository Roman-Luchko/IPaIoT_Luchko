<?php

$teplota = $_GET['teplota'];

$file = fopen("text.txt","w");

if(isset($teplota)){
  $file = fwrite($file,$teplota);
}

fclose($file);

echo file_get_contents("test.txt");

?>
