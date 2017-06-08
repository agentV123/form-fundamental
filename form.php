<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		sample form
	</title>
</head>
<body>
	<form method="get" action="form_processor.php">
		<p>Name</p>
		<input type="text" name="name">
		<p>Age</p>
		<input type="text" name="age">
		<input type="submit" name="" value="submit">
		<input type="hidden" name="hidden" value="<?php 
			$hidden_value = rand();
			$_SESSION['hidden_value'] = $hidden_value;
			echo $hidden_value;
		?>">
	</form>
</body>
</html>