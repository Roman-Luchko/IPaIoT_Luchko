<?php

//-> создаю переменные, которые принимаю с esp
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];
$svetlo = $_POST['svetlo'];
$voda = $_POST['voda'];

// -> разовая запись в файл
$text = fopen("text.txt","w+");
$result = "temperature-> ".$temperature.
          " humidity-> ".$humidity.
          " svetlo-> ".$svetlo.
          " voda-> ".$voda; 
fwrite($text,$result);
fclose($text);

$text = fopen("text.txt","w+");
$res = fgets($text);
fclose($text);
echo $res;

?>
