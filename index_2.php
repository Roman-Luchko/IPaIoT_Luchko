<?php
<?php
$fd = fopen("hello.txt", 'a+') or die("не удалось создать файл");
$str = "Привет мир";
fwrite($fd, $str);
fclose($fd);
?>
?>

