<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
echo'<h1> change info</h1>';
?>
<html>
<form method="post" action="cpanel2.php">
<p> NAME :-</p>
<input type="text" name="name" value="<?php echo $name;?>">
<p> EMAIL :-</p>
<input type="text" name="email" value="<?php echo $email;?>">
<br/>
<input type="submit" name="submit" value="change">
<form/>
</html>