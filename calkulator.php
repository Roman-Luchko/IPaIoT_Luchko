<?php
$text = fopen("text.txt",'r');
$result = fgets($text);
$result = explode(" ",$result);
echo result[0];
$pocet = 0;
foreach($result as $i){
  echo $i;
  echo $pocet;
  $pocet++;
}
fclose($text);
?>
