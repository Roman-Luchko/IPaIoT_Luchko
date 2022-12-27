<?php
$text = fopen("text.txt",'r');
$result = fgets($text);
$result = explode(" ",$result);
foreach($result as $i){
  echo $i;
}
fclose($text);
?>
