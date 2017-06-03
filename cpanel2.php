<?php
session_start();
$db = mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);
$user = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];


#$sql = "select user_id from cms_users where email ='$email'";
#$result=mysql_query($sql,$db) or die(mysql_error($db));

$sql = "update cms_users SET name='".$name."' and email='".$email."' where user_id='.$user'";
mysql_query($sql,$db) or die(mysql_error($db));
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;

header('Location: /main1.php');
?>