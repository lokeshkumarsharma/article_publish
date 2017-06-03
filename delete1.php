<?php
session_start();
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);
#$pending = $_POST['pending'];
$pending = $_SESSION['pend_id'];
$sql = "delete from cms_pending where pend_id='.$pending.'";
mysql_query($sql,$db) or die(mysql_error($db));
header('Location: /admin1.php');
?> 