<?php session_start(); ?>
<html>

<p>u r currently logged in as <?php echo $_SESSION['name']; ?></p>


<form method="post" action="search1.php">
<p><input type="text" name="search">
<input type="submit" value="submit"></p>
</form>
<p> </p>
<br/>
<p>
<a href="articles2.php"> articles | </a>

<a href="compose1.php"> compose | </a>
<a href="logout1.php">logout |</a>
<a href="cpanel1.php">control panel</a>
</p>

</p>

