<?php

//-> создаю переменные, которые принимаю с esp
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$svetlo = $_GET['svetlo'];
$voda = $_GET['voda'];
$pocet = $_GET['pocet'];
if($pocet == 12){
          $text = fopen("text.txt","w");   
          fclose($text);
}
// -> запись в файл
$text = fopen("text.txt","a");
$result = "temperature-> ".$temperature.
          " humidity-> ".$humidity.
          " svetlo-> ".$svetlo.
          " voda-> ".$voda.
          " ".$pocet."\n";
echo $result;
fwrite($text,$result);
fclose($text);

$text = fopen("text.txt","r");
//$res = fgets($text);
while (!feof($text)) {
    echo fgets($text);
    echo '<br>';
}
fclose($text);
//$res = file_get_contents("text.txt");
//echo $res;

?>
