<?php
session_start();
include('index1.php');
echo'<H1>members login</H1>';
?>
<html>
<form method="post" action="login2.php">
<p>Email <input type="text" name="email"></p>

<p>Name <input type="text" name="name"></p>
<p>Password <input type="password" name="pass"></p>
<p><input type="submit" value="login"></p>
</form>
<p>not an account?? <a href="signup1.php">sign up</a></p>
</html>
