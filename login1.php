
<?php
session_start();
#include('index1.php');
echo'<center><H1><a style="color:yellow;"><strong>Lokesh web app</strong></a></H1></center>';
?>
<html>
<head>
<meta charset="utf-8">
<center>


<h1 style="font-size:50px; font-family:Times New Roman Italic; color:yellow;">PUBLISH AN ARTICLE</h1>
<link rel="stylesheet" href="login1.css">
</head>

<body background="article.jpg">
<form method="post" action="login2.php">
<div class="log">
<p style="font-size:30px; font-family:Times New Roman Italic; color:yellow;"><strong>Email</strong> <input type="text"  name="email"></p>

<p style="font-size:30px; font-family:Times New Roman Italic; color:yellow;"><strong>Name</strong> <input type="text" name="name"></p>
<p style="font-size:30px; font-family:Times New Roman Italic; color:yellow;"><strong>Password</strong> <input type="password" name="pass"></p>
<p><input type="submit" value="login"></p>
</form>
<p style="font-size:30px; font-family:Times New Roman Italic; color:yellow;"><strong>not an account?? </strong><a href="signup1.php">sign up</a></p>

</div>

</center>
</body>
</html>
