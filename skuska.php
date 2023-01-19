<?php

//создать переменные для кнопок
$pocet_button = $_POST["pocet"];
$reset_button = $_POST["reset"];

//сперва считать с файла предыдущие количества итераций
$file = fopen("g.txt","w+");

//записать их в строку
$stroka = fgets($file);

//разделить строку на масив и дать значения(их 2) до отдельной переменной
$v = explode($stroka);
$pocet = $v[0] + $pocet_button;
$reset = $v[1] + $reset_button;
echo "Pocet -> ".$pocet;
echo "Reset -> ".$reset;

//записать нажатие опять до файла
$text = $pocet." ".$reset." "."\n";
fwrite($text);
fclose($text);

?>
<html>
<form action="skuska.php" method="post">
  <input type="button" name="pocet",value="pocet"><br>
  <input type="button" name="reset",value="reset"><br>
  <input type="submit" value="Submit">
</form>
</html>
