<?php
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);

$email=$_POST['email'];
$name=$_POST['name'];
$pass=$_POST['pass'];

$sql = "select * from cms_users where email = '$email' and password = '$pass' and name = '$name'";
$result = mysql_query($sql,$db);

if (mysql_num_rows($result) > 0) {
$row = mysql_fetch_array($result);
print_r($row);
extract($row);
print_r($row);
session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['name'] = $name;
$_SESSION['email']= $email;

if($name=='admin' && $email=='administrator')
	
	{
		
		header('Location: /admin1.php');
	}
	
else{
	
	
header('Location: /main1.php');
}
}
else
{
		header('Location: /login1.php');
		echo'wrong information';
}
?>