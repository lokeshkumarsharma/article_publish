<?php
session_start();
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);
print_r($_SESSION);
$user=$_SESSION['user_id'];
$pend = $_SESSION['pend_id']; 
#echo $user;
#print_r($_POST);
$title = $_POST['title'];
$text=$_POST['textarea'];

$sql="insert into cms_articles(user_id, title,article_text) values ('$user','$title','$text')";
$result=mysql_query($sql,$db) or die(mysql_error($db));
 

if (mysql_insert_id($db)) {
#$row = mysql_fetch_array($result);
#extract($row);

if($_SESSION['name']=='admin' && $_SESSION['email']=='administrator')
	
	{
		$sql = "delete from cms_pending where pend_id = '$pend'";
		mysql_query($sql,$db);
		
		
		header('Location: /admin1.php');
	}
	
else{
	
	
header('Location: /main1.php');
}

}
else
{
		echo'not store';
		
}

?>