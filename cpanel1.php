<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
echo'<center><h1> change info</h1></center>';
?>
<html>
<body background="bg-body.jpg">
<center>
<form method="post" action="cpanel2.php">
<p style="font-family:comic Sans MS;color:#A00000;font-size:20px;"><strong> NAME :-</strong></p>
<input type="text" name="name" value="<?php echo $name;?>">
<p style="font-family:comic Sans MS;color:#A00000;font-size:20px;"><strong>EMAIL :-</strong></p>
<input type="text" name="email" value="<?php echo $email;?>">
<br/>
<p></p>
<input type="submit" name="submit" value="change">
<form/>
</center>
</body>
</html>