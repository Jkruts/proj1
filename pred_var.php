<!doctype html>
<html>
<head>
</head>
<body>
	<form action='pred_var.php' method='post';
	<p>Your Name</p>
	<input type='text' name='name'><br>
	<p>Your email</p>
	<input type='text' name='email'><br>
	<p>Your phone number</p>
	<input type='tel' name='phone'><br>
	
	<input type='submit' name='submit'>
	
<?php
	print_r($_POST);
?>
</body>
</html>
