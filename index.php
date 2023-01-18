<?php
        echo '<h1>index2.php web page with parameters</h1>';

        echo '<h2> https://phpipaiot.azurewebsites.net/index2.php?a=10&b=2 </h2>';

        echo "try calcul";
        echo "<br>";
        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];

        $text = "a=" . $sn1 . " b=" . $sn2;
        $sum = $sn1 + $sn2;

        $operacia = $_GET["operation"];
        $text = "a=" . $sn1 . " b=" . $sn2 . $operacia . "opartion? ";
        echo $text;
        if($operacia == "*"){
        $result = $sn1 * $sn2;
        }elseif($operacia == "+"){
        $result = $sn1 + $sn2;
        }elseif($operacia == "/"){
        $result = $sn1 / $sn2;
        }elseif($operacia == "-"){
        $result = $sn1 - $sn2;
        }else 
        $result = 0;
        echo "<br>";
        echo "Result:" . $result;
    ?>
