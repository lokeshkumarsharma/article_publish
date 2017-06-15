<html>
<head>
<meta charset="utf-8">
<body background="bg-body.jpg">

<?php
#session_start();
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);

$sql = "select * from cms_articles";
$result = mysql_query($sql,$db);
$row = mysql_fetch_array($result);
while($row)
{
	echo'<form method="post" action="comment1.php">';
	echo'<a style="font-size:25px; font-family:Lucida Console; color:blue;">TITLE :-</a>';
	echo '<a style="font-family:comic Sans MS;color:black;font-size:20px; white-space:pre-wrap">'.$row['title'].'</a>';
	echo '<p> </p>';
	echo'<a style="font-size:30px; font-family:Lucida Console; color:blue;">TEXT :-</a>';
	echo'<a style="font-family:comic Sans MS;color:black;font-size:15px; white-space:pre-wrap">'.$row['article_text'].'</a>';
	echo'<br/>';
	echo'<br/>';
	echo'<br/>';
	echo "<input type='hidden' name='article_id' value='".$row["article_id"]."'/>";
	#$_SESSION['article_id'] = mysql_insert_id($db);
	echo'<textarea name="comment" rows="5" cols="20"></textarea>';
	echo'<input type="submit" value="comment">';
	echo'</form>';
	echo'<form method="post" action="comment2.php">';
	echo "<input type='hidden' name='article_id' value='".$row["article_id"]."'/>";
	echo'<input type="submit" value="show comment">';
	echo'</form>';
	
	$row =  mysql_fetch_array($result);
	
}
?>
</body>
</html>