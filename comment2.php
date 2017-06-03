<?php
session_start();
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);
$article = $_POST['article_id'];
$sql = "select comment_text from cms_comment where article_id = '$article'";
$result = mysql_query($sql,$db) or die(mysql_error($db));
$row = mysql_fetch_array($result);
$num = 1;
while($row)
{   echo $num;
     echo'.  '; 
    echo $row['comment_text'];
	echo'<br/><br/>';
	$row = mysql_fetch_array($result);
    $num++;
}
?>