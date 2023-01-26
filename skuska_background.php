<?php
  $teplota = $_GET['teplota'];
  
  $file = fopen("text.txt","w");

  echo "teplota je ->".$teplota;  

  if(isset($teplota)){
    $file = fwrite($file,$teplota);
  }

  fclose($file);
?>
