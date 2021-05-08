<html>
<head>
	<title>
		Addition
	</title>
</head>

<body>
	<h><strong>What is 2 + 2?</strong></h><br>
<form action="" method="post">
<input type="radio" name="answer" value="3">3
<input type="radio" name="answer" value="2">2
<input type="radio" name="answer" value="4">4
<input type="radio" name="answer" value="1">1
<br>
<input type="submit" name="submit" value="Submit Answer" />
<br>
</form>
<?php
	if (isset($_POST['submit'])) {
		if(isset($_POST['answer']))
		{
			$answer = $_POST['answer'];
		
			if($answer != "4") echo "Wrong";
		
			else echo "Correct!";
		}
		
	}
?>
	
</body>
<html>