<html>
<head>
	<title>
		Subtraction
	</title>
</head>

<body>
	<h><strong>What is 5 - 2?</strong></h><br>
<form action="" method="post">
<input type="radio" name="radio" value="9">9
<input type="radio" name="radio" value="5">5
<input type="radio" name="radio" value="2">2
<input type="radio" name="radio" value="3">3
<br>
<input type="submit" name="submit" value="Submit Answer" />
<br>
<?php
	if (isset($_POST['submit'])) {
		if(isset($_POST['radio']))
		{
			$answer = $_POST['radio'];
		
			if($answer != "3") echo "Wrong";
			else echo "Correct!";
		}
		
	}
?>
	
</body>
<html>