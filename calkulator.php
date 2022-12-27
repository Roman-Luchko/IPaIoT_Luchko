<?php
$text = fopen("text.txt",'r');
$result = fgets($text);
$result = explode(" ",$result);
$pocet = 0;
foreach($result as $i){
  echo $i;
  echo pocet;
  pocet += 1;
}
fclose($text);
?>
