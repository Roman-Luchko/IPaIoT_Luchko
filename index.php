

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Qwr</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <input type="text" name="first" placeholder="Enter first num">
            <input type="text" name="second" placeholder="Enter second num">
            <input type="text" name="third" placeholder="Enter third num">
            <input type="text" name="fourth" placeholder="Enter fourth num">
            <input type="text" name="fifth" placeholder="Enter fifth num">
            <input type="text" name="sixth" placeholder="Enter sixth num">
            <button type="submit" >Send information</button>
        </form>
    </body>
    </html>
<?php
$f = fopen('result.txt', 'w+');
$first = $_POST['first']; 
$second = $_POST['second']; 
$third = $_POST['third']; 
$fourth = $_POST['fourth']; 
$fifth = $_POST['fifth']; 
$sixth = $_POST['sixth']; 

fwrite($f,$first);
fwrite($f,$second);
fwrite($f,$third);
fwrite($f,$fourth);
fwrite($f,$fifth);
fwrite($f,$sixth);


fclose($f);
?>
