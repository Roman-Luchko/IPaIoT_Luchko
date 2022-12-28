<?php
//-> php kod
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
                   //echo "fff";   
                   $text = file('text.txt');
               
                   $text[11] = $text[10];
                   file_put_contents('text.txt', $text);   
               
                   $text[10] = $text[9];
                   file_put_contents('text.txt', $text);
                    
                   $text[9] =  $text[8]; 
                   file_put_contents('text.txt', $text);
                    
                   $text[8] =  $text[7]; 
                   file_put_contents('text.txt', $text);
                   
                   $text[7] =  $text[6]; 
                   file_put_contents('text.txt', $text);
                    
                   $text[6] =  $text[5]; 
                   file_put_contents('text.txt', $text);
                   
                   $text[5] =  $text[4]; 
                   file_put_contents('text.txt', $text);
                    
                   $text[4] =  $text[3]; 
                   file_put_contents('text.txt', $text); 
                   
                   $text[3] =  $text[2]; 
                   file_put_contents('text.txt', $text);
                    
                   $text[2] =  $text[1]; 
                   file_put_contents('text.txt', $text);
                   
                   $text[1] =  $text[0]; 
                   file_put_contents('text.txt', $text);
                    
                   $result = "temperature-> ".$temperature.
                              " humidity-> ".$humidity.
                              " svetlo-> ".$svetlo.
                              " voda-> ".$voda."\n";
               
                   $text[0] =  $result; 
                   file_put_contents('text.txt', $text);
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
