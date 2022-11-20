

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Qwr</title>
    </head>
    <body>
        <form action="">
            <input type="submit" value="Button 1" name="first" />
            <input type="submit" value="Button 2" name="second" />
        </form>
    </body>
    </html>
<?php
$f = fopen('result.txt', 'w+');
$first = $_GET['first']; 
$second = $_GET['second']; 
fwrite($f,$first);
fwrite($f,$second);
echo "first $first";
echo "second $second";
fclose($f);
?>
