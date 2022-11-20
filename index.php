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
		if (isset($_POST['first'], $_POST['second']),$_POST['third']),$_POST['fourth']),$_POST['fifth']),$_POST['sixth']),) {
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
			
		} else {
			echo 'You need to provide your name and email address.';
		}
	?>
    <main>
        <form action="" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter first" />
            </div>

            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter second" />
            </div>
		
	    <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter third" />
            </div>
		
	    <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter fourth" />
            </div>
	    
	    <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter fifth" />
            </div>
	    
	    <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter sixth" />
            </div>
            <button type="submit">Subscribe</button>
        </form>
    </main>
</body>
</html>
