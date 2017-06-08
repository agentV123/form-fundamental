<?php
	session_start();
	if ($_GET['hidden'] == $_SESSION['hidden_value']) {
		if ($_GET['name']) {
			echo "Hello ".$_GET['name'];
			echo " You are ".$_GET['age']." years old";
		}else{
			echo " you entered empty";
		}
	}else{
		echo "unauthorised try";
	}

?>