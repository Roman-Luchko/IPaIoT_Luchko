<?php

$pocet = 0;

$file = fopen('text.txt',"a+");
fwrite($file,"Hello Worl\r\n");
fclose($file);

$f = fopen('text.txt',"r");
$ftext = fgets($f, 999);

echo $ftext."";
echo 'hhh';
echo file_get_contents("text.txt");
echo 'ddd';
fclose($f);

if(pocet == 10){
  $file = fopen('text.txt',"w+");
  fclose($file);
}
$pocet = $pocet + 1;
?>
<html>
  <head>
    <title>LoT ESP</title>
  </head>
  <body>
    <p>text</p>
  </body>
</html>
