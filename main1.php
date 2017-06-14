<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" href="ok.css">
</head>
<body background="bg-body.jpg">
<center>

<p style="font-family:comic Sans MS;color:#A00000;font-size:20px; white-space:pre-wrap"white-space:pre-wrap">u r currently logged in as <?php echo'<a style="font-family:comic Sans MS;color:blue;font-size:30px; white-space:pre-wrap">'.$_SESSION['name'].'</a>'; ?></p>


<form method="post" action="search1.php">
<p><input type="text" name="search">
<input type="submit" value="submit"></p>
</form>
<p> </p>
<br/>
<div class="lok">
<p>
<a class="ok1" href="articles2.php" style="font-family:comic Sans MS;color:#A00000;font-size:20px; white-space:pre-wrap"> articles | </a>

<a class="ok2" href="compose1.php" style="font-family:comic Sans MS;color:#A00000;font-size:20px; white-space:pre-wrap"> compose | </a>
<a class="ok3" href="logout1.php" style="font-family:comic Sans MS;color:#A00000;font-size:20px; white-space:pre-wrap">logout |</a>
<a class="ok4" href="cpanel1.php" style="font-family:comic Sans MS;color:	#A00000;font-size:20px; white-space:pre-wrap">control panel</a>
</p>
</div>
</p>
<img src="blog.jpg" width="400"></a>
</center>
</body>
</html>
