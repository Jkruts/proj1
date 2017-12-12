<!doctype html>
<html>
<head>
<title>Форма з матюками</title>

</head>
<body>
<form method='post'>
	<textarea name='comment'></textarea>
	<br>
	<button type='submit'>Submit</button>
</form>
<div>
	<?php
		if (isset($_POST['comment'])) {
			addComment('/home/oksana/dev/proj1/comments.txt', ['date' => date('Y-m-d H:i:s'), 'comment' => $_POST['comment']]);
		}
		
		$comments = readComments('/home/oksana/dev/proj1/comments.txt');
		foreach ($comments as $comment) {
			echo '<div>' . ($comment['date'] ?? '') . ': ' . htmlentities(maskBadWords($comment['comment'])) . '</div>';
		}
	?>
</div>
</body>
</html>

<?php
function maskBadWords($comments) {
	$arr = ['сука', 'пиздец'];
	foreach ($arr as $value) {
		$comment = str_replace($value, '***', $comment);
		}
		return $comment;
	}
	
	function readComment ($path)
	{
		if (file_exists($path)) {
			return unserialize(file_get_contents($path));
		} 
		
		else {
			return[];
		}
	}
	
function addComments($path, array $comment) {
	$comments = readComments ($path);
	$comments[] = $comment;
	writeComment($path, $comments);
}

function writeComment($path, array $comments)
{
	file_put_contents($path, serialize($comments));	
}




?>
