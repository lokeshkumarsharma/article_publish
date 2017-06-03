<?php
session_start();
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);

$sql = "select * from cms_articles";
$result = mysql_query($sql,$db);
$row = mysql_fetch_array($result);
while($row)
{
	echo'<form method="post" action="comment1.php">';
	echo'TITLE :-';
	echo $row['title'];
	echo'<br/>';
	echo'TEXT :-';
	echo $row['article_text'];
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
