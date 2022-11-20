<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>PHP Form Demo</title>
</head>
<body>
	<?php
				
		if (isset($_POST['first'], $_POST['second'],$_POST['third'],$_POST['fourth'],$_POST['fifth'],$_POST['sixth'])){
			$first = $_POST['first'];
			$second = $_POST['second'];
			$third = $_POST['third'];
			$fourth = $_POST['fourth'];
			$fifth = $_POST['fifth'];
			$sixth = $_POST['sixth'];
			$seventh = $_POST['seventh'];

			// show the $name and $email
			//echo "first $first<br>";
			//echo "second $second<br>";
			//echo "third $third<br>";
			//echo "fourth $fourth<br>";
			//echo "fifth $fifth<br>";
			//echo "sixth $sixth<br>";
			//echo "seventh $seventh<br>";
			$f = fopen("qwerty_ggg.txt", 'a+') or die("не удалось создать файл");
			
			fwrite($f," Date -> ");
			fwrite($f, $first);
			fwrite($f," Phone -> ");
			fwrite($f, $second);
			fwrite($f," County -> ");
			fwrite($f, $third);
			fwrite($f," City -> ");
			fwrite($f, $fourth);
			fwrite($f," Postcode -> ");
			fwrite($f, $fifth);
			fwrite($f," Name -> ");
			fwrite($f, $sixth);
			fwrite($f," Massage -> ");
			fwrite($f, $seventh);
			fwrite($f,"\n");
			
		} else {
			//echo 'Fill in all cells';
		}
	?>
    <main>
	    
        <form action="" method="post">
	    <h1>Write an application</h1>
            <div>
                <label for="first">Date:</label>
                <input type="date" name="first" required="required" placeholder="Write here" />
            </div>

            <div>
                <label for="second">Phone:</label>
                <input type="tel" name="second" required="required" placeholder="Write here" />
            </div>
		
	    <div>
                <label for="third">County:</label>
                <input type="text" name="third" required="required" placeholder="Write here" />
            </div>
		
	    <div>
                <label for="fourth">City:</label>
                <input type="text" name="fourth" required="required" placeholder="Write here" />
            </div>
	    
	    <div>
                <label for="fifth">Postcode:</label>
                <input type="text" name="fifth" required="required" placeholder="Write here" />
            </div>
	    
	    <div>
                <label for="sixth">Name:</label>
                <input type="text" name="sixth" required="required" placeholder="Write here" />
            </div>
	    <div>
                <label for="seventh">Massage:</label>
                <input type="text" name="seventh" required="required" placeholder="Write here" />
            </div>	
            <button type="submit">Send</button>
        </form>
    </main>
</body>
</html>
//
