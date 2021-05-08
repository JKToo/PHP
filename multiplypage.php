<html>
<head>
	<title>
		Multiplication
	</title>
</head>

<body>
	<h><strong>What is 15 x 2?</strong></h><br>
<form action="" method="post">
<input type="radio" name="radio" value="30">30
<input type="radio" name="radio" value="27">27
<input type="radio" name="radio" value="45">45
<input type="radio" name="radio" value="15">15
<br>
<input type="submit" name="submit" value="Submit Answer" />
<br>
<?php
	if (isset($_POST['submit'])) {
		if(isset($_POST['radio']))
		{
			$answer = $_POST['radio'];
		
			if($answer != "30") echo "Wrong";
		
			else echo "Correct!";
		}
		
	}
?>
	
</body>
<html>