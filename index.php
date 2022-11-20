

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Qwr</title>
    </head>
    <body>
     <?php
        $f = fopen('result.txt', 'w+');
        $first = $_POST['first']; 
        $second = $_POST['second']; 
        fwrite($f,$first);
        fwrite($f,$second);
        echo "first $first";
        echo "second $second";
        fclose($f);
    ?>
        <form action="">
            <input type = "text" name="first" value = "first" />
            <input type = "text" name="second" value = "second" />
            <input type="submit" name = "sub" value="Button" />
        </form>
    </body>
    </html>

