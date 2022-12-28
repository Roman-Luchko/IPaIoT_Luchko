<?php

//-> создаю переменные, которые принимаю с esp
$temperature = GET['temperature'];
$humidity = GET['humidity'];
$svetlo = GET['svetlo'];
$voda = GET['voda'];
$result = "temperature-> ".$temperature.
          " humidity-> ".$humidity.
          " svetlo-> ".$svetlo.
          " voda->".$voda; 
?>
