<?PHP

$file1 = fopen("sensors.txt","w") or die("Unable to open file!");
$str = "Привет мир";
fwrite($file1, $str);
fclose($fd);
echo $file1;

?>
