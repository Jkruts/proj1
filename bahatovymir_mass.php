<?php
$book1 = array('name' => 'Dark Tower', 'author' => 'S. King', 'style' => 'Horror' 'price' => '$99');
$book2 = array('name' => 'East on Eden', 'author' => 'John Stainback' 'style' => 'Novel', 'price' => '$75');
$book3 = array('name' => 'I`m robot', 'author' => 'Isaak Azimov', 'style' => 'Siens fiction', 'price' => '$80');
$goods = array($book1, $book2, $book3);
// output
echo'<pre>';
	print_r($goods);
echo'</pre>';
?>
