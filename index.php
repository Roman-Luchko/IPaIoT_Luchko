<?php

//-> создаю переменные, которые принимаю с esp
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$svetlo = $_GET['svetlo'];
$voda = $_GET['voda'];
$pocet = $_GET['pocet'];
if($pocet != 12){
          // -> запись в файл
          if(isset($temperature)){           
                    $text = fopen("text.txt","a");
                    $result = "temperature-> ".$temperature.
                              " humidity-> ".$humidity.
                              " svetlo-> ".$svetlo.
                              " voda-> ".$voda.
                              " ".$pocet."\n";
                    //echo $result;
                    fwrite($text,$result);
                    fclose($text);       
          }
}
else{
         if(isset($temperature)){           
               $text = file('text.txt');
               $file[12] = $file[11];
               $file[11] = $file[10]; 
               $file[9] =  $file[8]; 
               $file[8] =  $file[7]; 
               $file[7] =  $file[6]; 
               $file[6] =  $file[5]; 
               $file[5] =  $file[4]; 
               $file[4] =  $file[3]; 
               $file[3] =  $file[2]; 
               $file[2] =  $file[1]; 
               $result = "temperature-> ".$temperature.
                              " humidity-> ".$humidity.
                              " svetlo-> ".$svetlo.
                              " voda-> ".$voda.
                              " ".$pocet."\n";
               $file[1] =  $result; 
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
