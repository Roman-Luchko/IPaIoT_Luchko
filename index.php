<?php

//-> создаю переменные, которые принимаю с esp
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$svetlo = $_GEt['svetlo'];
$voda = $_GET['voda'];

// -> разовая запись в файл
$text = fopen("text.txt","w");
$result = "temperature-> ".$temperature.
          " humidity-> ".$humidity.
          " svetlo-> ".$svetlo.
          " voda-> ".$voda; 
fwrite($text,$result);
fclose($text);

$text = fopen("text.txt","r");
$res = fgets($text);
fclose($text);
echo $res;

?>
