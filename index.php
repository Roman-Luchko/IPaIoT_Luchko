<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Form Demo</title>
</head>
<body>
	<?php

		//---------------------------------------------
		// WARNING: this doesn't include sanitization
		// and validation
		//---------------------------------------------
		//if (isset($_POST['first'], $_POST['second'],$_POST['third'],$_POST['fourth'],$_POST['fifth'],$_POST['sixth'])){
			$first = $_POST['first'];
			$second = $_POST['second'];
			$third = $_POST['third'];
			$fourth = $_POST['fourth'];
			$fifth = $_POST['fifth'];
			$sixth = $_POST['sixth'];

			// show the $name and $email
			echo "first $first<br>";
			echo "second $second<br>";
			echo "third $third<br>";
			echo "fourth $fourth<br>";
			echo "fifth $fifth<br>";
			echo "sixth $sixth<br>";
	
			$f = fopen("hello.txt", 'w') or die("не удалось создать файл");
			fwrite($f, $first);v
			fwrite($f, $second);
			fwrite($f, $third);
			fwrite($f, $fourth);
			fwrite($f, $fifth);
			fwrite($f, $sixth);
			
		//} else {
			//echo 'You need to provide your name and email address.';
		//}
	?>
    <main>
        <form action="" method="post">
            <div>
                <label for="first">Name:</label>
                <input type="text" name="first" required="required" placeholder="Enter first" />
            </div>

            <div>
                <label for="second">Name:</label>
                <input type="text" name="second" required="required" placeholder="Enter second" />
            </div>
		
	    <div>
                <label for="third">Name:</label>
                <input type="text" name="third" required="required" placeholder="Enter third" />
            </div>
		
	    <div>
                <label for="fourth">Name:</label>
                <input type="text" name="fourth" required="required" placeholder="Enter fourth" />
            </div>
	    
	    <div>
                <label for="fifth">Name:</label>
                <input type="text" name="fifth" required="required" placeholder="Enter fifth" />
            </div>
	    
	    <div>
                <label for="sixth">Name:</label>
                <input type="text" name="sixth" required="required" placeholder="Enter sixth" />
            </div>
            <button type="submit">Subscribe</button>
        </form>
    </main>
</body>
</html>
