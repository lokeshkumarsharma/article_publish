<?php
session_start();
include('index1.php');

echo'<center><H1><p style="font-size:30px; font-family:Times New Roman Italic; color:blue;">create an account</H1></center></p>';
?>

<html>
<center>
<body background="bg-body.jpg">

<form method="post" action="signup2.php">
<p style="font-size:30px; font-family:Times New Roman Italic; color:blue;">Email <input type="text" name="email"></p>

<p style="font-size:30px; font-family:Times New Roman Italic; color:blue;">Name <input type="text" name="name"></p>
<p style="font-size:30px; font-family:Times New Roman Italic; color:blue;">Password <input type="password" name="pass"></p>
<p><input type="submit" value="login "></p>
</form>
</center>
</body>
</html>