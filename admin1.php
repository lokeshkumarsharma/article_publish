<?php session_start(); 
?>
<html>
<body background="bg-body.jpg">
<center>
<p style="font-family:comic Sans MS;color:#A00000;font-size:20px; white-space:pre-wrap">u r currently logged in as <?php echo'<a style="font-family:comic Sans MS;color:blue;font-size:30px; white-space:pre-wrap">'.$_SESSION['name'].'</a>'; ?></p>


<form method="post" action="search1.php">
<p><input type="text" name="search">
<input type="submit" value="submit"></p>
</form>
<p> </p>
<p>
<a href="articles2.php" style="font-family:comic Sans MS;color:#A00000;font-size:30px;"> articles | </a>

<a href="logout1.php" style="font-family:comic Sans MS;color:#A00000;font-size:30px;">logout |</a>
<a href="cpanel1.php" style="font-family:comic Sans MS;color:#A00000;font-size:30px;">control panel |</a>
<a href="pending2.php" style="font-family:comic Sans MS;color:#A00000;font-size:30px;"> pending | </a>

</p>

</p>
</center>
</html>

