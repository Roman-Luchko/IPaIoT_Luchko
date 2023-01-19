<?php
$num = 0;
if (isset($_POST['but'])){
  if (isset($_COOKIE['count'])){
    $num = $_COOKIE['count'] + 1;
  }
  else if(isset($_POST['reset'])){
      if(isset($_COOKIE['count'])){
          $num = 0;
      }
  }
  setcookie('count', $num);
}
echo 'Вы нажали на кнопку '.$num. ' раз';

?>
<form action="registration.php" method="post">
    <input type="submit" name="but" value="<?php echo $num;?>">
</form>
