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
		if (isset($_POST['name'], $_POST['email'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];

			// show the $name and $email
			echo "Thanks $name for your subscription.<br>";
			echo "Please confirm it in your inbox of the email $email.";
		} else {
			echo 'You need to provide your name and email address.';
		}
	?>
    <main>
        <form action="" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter your name" />
            </div>

            <div>
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter your email" />
            </div>

            <button type="submit">Subscribe</button>
        </form>
    </main>
</body>
</html>
