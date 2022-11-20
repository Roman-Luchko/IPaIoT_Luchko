

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
$f = fopen('result.txt', 'r');
fwrite($_POST['first']);
fwrite($_POST['second']);
fwrite($_POST['third']);
fwrite($_POST['fourth']);
fwrite($_POST['fifth']);
fwrite($_POST['sixth']);
?>
