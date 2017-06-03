<?php
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);

$email=$_POST['email'];
$name=$_POST['name'];
$pass=$_POST['pass'];

#$sql = 'insert into cms_users values("' . mysql_real_escape_string($email, $db) . '",
#PASSWORD("' . mysql_real_escape_string($pass, $db) . '"),
#$"' . mysql_real_escape_string($name, $db) . '")';
$sql = "insert into cms_users(email, password, name) values ('$email', '$pass', '$name')";
mysql_query($sql, $db) or die(mysql_error($db));


echo 'Successfully';
session_start();
$_SESSION['user_id'] = mysql_insert_id($db);
print_r($_SESSION);
$_SESSION['name'] = $name;

header('Location: /main1.php');
?>