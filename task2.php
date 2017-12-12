<?php
<form action="index.php" method="post">
    <input type="text" name="email"/> <!-- admin@example.com -->
    <input type="submit"/>
</form>
<?php
print_r($_POST);
// output
// Array ( [email] => admin@example.com )
?>