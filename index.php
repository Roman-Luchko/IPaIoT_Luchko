<?php

//-> создаю переменные, которые принимаю с esp
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];
$svetlo = $_POST['svetlo'];
$voda = $_POST['voda'];
$result = "temperature-> ".$temperature.
          " humidity-> ".$humidity.
          " svetlo-> ".$svetlo.
          " voda-> ".$voda; 
echo $result;
?>
