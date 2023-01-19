<?php
$num = 0;
if (isset($_POST['but'])){
  if (isset($_COOKIE['count'])){
    $num = $_COOKIE['count'] + 1;
  }
}else if(isset($_POST['reset'])){
      if(isset($_COOKIE['count'])){
          $num = 0;
      }
  }
  setcookie('count', $num);

echo 'the button has been pressed '.$num. ' times';

?>
<form action="skuska.php" method="post">
    <input type="submit" name="but" value="<?php echo "+1"?>">
    <input type="submit" name="reset" value="<?php echo "reset"?>">
</form>
