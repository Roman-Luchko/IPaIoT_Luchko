//сам калькулятор
<?php
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $znak = $_POST['znak'];
  $result = null;
  if(isset($number1) and isset($number2) and isset($znak)){
    switch($znak){
      case '+':
        $result = $number1 + $number2;
        break;
      case = '-':
        $result = $number1 - $number2;
        break;
      case = '/':
        $result = $number1 / $number2;
        break;
      case = '*':
        $result = $number1 * $number2;
        break;      
    }
  }
?>
