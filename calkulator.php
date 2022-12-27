<?php
$text = fopen('text.txt','r');
while (($buffer = fgets($handle)) !== false) {
        echo $buffer;
    }
?>

