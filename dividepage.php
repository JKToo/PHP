<html>
<head>
	<title>
		Division
	</title>
</head>

<body>
	<h><strong>What is 100 / 5?</strong></h><br>
<form action="" method="post">
<input type="radio" name="radio" value="35">35
<input type="radio" name="radio" value="15">15
<input type="radio" name="radio" value="50">50
<input type="radio" name="radio" value="20">20
<br>
<input type="submit" name="submit" value="Submit Answer" />
<br>
<?php
	if (isset($_POST['submit'])) {
		if(isset($_POST['radio']))
		{
			$answer = $_POST['radio'];
		
			if($answer != "20") echo "Wrong";
		
			else echo "Correct!";
		}
		
	}
?>
	
</body>
<html>