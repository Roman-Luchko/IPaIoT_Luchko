

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
            <button type="submit" >Send information</button>

        </form>

    </body>
    </html>
<?php
echo (int)$_POST['first']."<br>";
echo (int)$_POST['second'];
?>
