<?php 
  $a = $_GET["a"];
  $znak = $_GET["znak"];
  $c = $_GET["c"];
  echo "Znak! je ".$znak." ";
  if($znak == "-"){    
    $result = $a-$b;
    echo "Result je ".$result;
  }
  if($znak == '+'){
    $result = $a+$b;
    echo "Result je ".$result;
  }
  if($znak == '*'){
    $result = $a*$b;
    echo "Result je ".$result;
  }
  if($znak == '/'){
    $result = $a*$b;
    echo "Result je ".$result;
  }
?>
