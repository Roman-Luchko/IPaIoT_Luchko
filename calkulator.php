<?php
  $sql_ip = 'mysqlluchko.mysql.database.azure.com';
  $sql_name = 'rl718un';
  $sql_pass = 'Uj*hm9e2';
  $sql_base = 'testdatabase';
  
  $connection = mysqli_connect($sql_ip,$sql_name,$sql_pass,$sql_base);
  $res_sql = mysqli_query($connection,"SELECT * FROM 'users'");
  $user = mysqli_fetch_assoc($res_sql);


  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $znak = $_POST['znak'];
  $result = null;
  if(isset($number1) and isset($number2) and isset($znak)){
    switch($znak){
      case '+':
        $result = $number1 + $number2;
        break;
      case '-':
        $result = $number1 - $number2;
        break;
      case '/':
        $result = $number1 / $number2;
        break;
      case '*':
        $result = $number1 * $number2;
        break;      
    }
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
  </head>
  <body>
    <form action="calkulator.php" method="post">
      <p>Number 1</p><input type="text" name="number1" value="">
      <p>Znak</p>
        <select name = "znak">
          <option value="+"><p>+</p></option>
          <option value="-"><p>-</p></option>
          <option value="/"><p>/</p></option>
          <option value="*"><p>*</p></option>
        </select>
      <p>Number 2</p><input type="text" name="number2" value="">
      <input type="submit" value="Submit">
    </form>
    <p>Result-> <?php echo $result?>
    <p>Pervoe znacenie z mysql -> <?php pritn_r($user) ?></p>
  </body>
</html>
