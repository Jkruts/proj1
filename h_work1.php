<html>
<head></head>
<body>
<form method="post">
    <textarea name="comment"></textarea>
    <br>
    <button type="submit">Comment</button>
</form>
<div>
    <?php
    if (isset($_POST['comment'])) {
        addComment('C:\test.txt', ['date' => date('Y-m-d H:i:s'), 'comment' => $_POST['comment']]);
    }
    $comments = readComments('C:\test.txt');
    foreach ($comments as $comment) {
        echo '<div>' . ($comment['date'] ?? '') . ': ' . htmlentities(maskBadWords($comment['comment'])) . '</div>';
    }
    ?>
</div>
</body>
</html>

<?php
function maskBadWords($comment) {
    $arr = ['сука', 'пиздец'];
    foreach ($arr as $value) {
        $comment = str_replace($value, '***', $comment);
    }
    return $comment;
}
function readComments($path)
{
    if (file_exists($path)) {
        return unserialize(file_get_contents($path));
    } else {
        return [];
    }
}
function addComment($path, array $comment)
{
    $comments = readComments($path);
    $comments[] = $comment;
    writeComments($path, $comments);
}
function writeComments($path, array $comments)
{
    file_put_contents($path, serialize($comments));
}
?>
