<?php

//создать переменные для кнопок
//$button_1 = $_POST["button_1"];
//$button_2 = $_POST["button_2"];

if(isset($_POST['button'])){
	echo 'button_1 was clicked';
}
?>
<html>
  	<form method="post">
  		<input type="submit" name="button"value="button" />  		
	</form>
</html>
