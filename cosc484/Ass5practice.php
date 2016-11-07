<html>
<head>
	<title>Assignment 5 Practice PHP</title>
</head>

<body>
	<?php
	$lname = $_POST['lname'];
	$pw = $_POST['pw'];
	$student = $_POST['student'];
	
	if(!(empty($lname)) && !(empty($student)))
	{
		echo "Submission complete";
		echo '<br/>';
		echo  "$lname";
		echo '<br/>';
		echo "$student";
	}
	?>
</body>

</html>