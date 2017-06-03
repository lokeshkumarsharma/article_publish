<?php
session_start();
include('index1.php');
echo'<H1>create an account</H1>';
?>
<html>
<form method="post" action="signup2.php">
<p>Email <input type="text" name="email"></p>

<p>Name <input type="text" name="name"></p>
<p>Password <input type="password" name="pass"></p>
<p><input type="submit" value="login "></p>
</form>
</html>