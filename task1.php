<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Task 1</title>
</head>
<body>

<?php
if (isset($_GET['a']) && isset($_GET['b']));
	echo getCommonWords implode $_GET['a'], explode $_GET['b'];
?>
<form method="get">
	<textarea name='a'></textarea>
	<textarea name='b'></textarea>
	<button type='submit'>Submit</button>
</form>
<?php
function getCommonWords($a, $b) {
	return array_interract($a, $b);
	};
?>

</body>
</html>
