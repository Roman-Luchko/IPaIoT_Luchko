<?php

//-> создаю переменные, которые принимаю с esp
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$svetlo = $_GET['svetlo'];
$voda = $_GET['voda'];
$text = fopen("text.txt","r");
$pocet = 0;

if($voda == 2){
          $text = fopen("text.txt","w");
          fclose($text);
}
while (($buffer = fgets($text)) !== false) {
          $pocet++;
}
echo $pocet;

if($pocet != 12){
          // -> запись в файл
          if(isset($temperature)){           
                    $text = fopen("text.txt","a");
                    $result = "temperature-> ".$temperature.
                              " humidity-> ".$humidity.
                              " svetlo-> ".$svetlo.
                              " voda-> ".$voda."\n";
                    //echo $result;
                    fwrite($text,$result);
                    fclose($text);       
          }
}
elseif($pocet == 12){
         echo "Tut kod rabotaet";
         if(isset($temperature)){     
               echo "I tut toze kod rabotaet";                
         }
}    
elseif($pocet >13){
          $text = fopen("text.txt","w");
          fclose($text);
}
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
