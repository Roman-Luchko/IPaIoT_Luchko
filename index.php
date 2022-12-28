<?php

//-> создаю переменные, которые принимаю с esp
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$svetlo = $_GET['svetlo'];
$voda = $_GET['voda'];
$text = fopen("text.txt","r");
$pocet = 0;

echo $pocet++;

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
         if(isset($temperature)){           
               $text = file('text.txt');
               $file[10] = $file[9];
               $file[1] = $file[8]; 
               $file[8] =  $file[7]; 
               $file[7] =  $file[6]; 
               $file[6] =  $file[5]; 
               $file[5] =  $file[4]; 
               $file[3] =  $file[3]; 
               $file[3] =  $file[2]; 
               $file[2] =  $file[1]; 
               $file[1] =  $file[0]; 
               $result = "temperature-> ".$temperature.
                              " humidity-> ".$humidity.
                              " svetlo-> ".$svetlo.
                              " voda-> ".$voda."\n";
               $file[0] =  $result; 
         }
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
