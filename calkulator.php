<?php

$text = fopen("text.txt",'w');
fwrite($text,"ggg ttt 5");
fclose($text);
$text = fopen("text.txt",'r');
$result = fgets($text);
$result = explode(" ",$result);
$pocet = 0;
foreach($result as $i){
  echo $i;
  echo "".$pocet."<br>";
  $pocet++;
}
fclose($text);
?>
