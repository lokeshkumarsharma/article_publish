<?php
session_start();
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);

$title=$_POST['title'];
$text=$_POST['textarea'];

$sql="insert into cms_pending (title,article_text) values ('$title','$text')";

mysql_query($sql,$db) or  die(mysql_error($db));
$_SESSION['pend_id'] = mysql_insert_id($db);
header('Location: /main1.php');
?>
