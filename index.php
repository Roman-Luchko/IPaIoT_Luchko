

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Qwr</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="submit" value="Button 1" name="button[btn1]" />
            <input type="submit" value="Button 2" name="button[btn2]" />
        </form>
    </body>
    </html>
<?php
$f = fopen('result.txt', 'w+');
$first = $_POST['first']; 
$second = $_POST['second']; 
 

fwrite($f,$first);
fwrite($f,$second);


echo "echo "first $first";
echo "second $second";



fclose($f);
?>
