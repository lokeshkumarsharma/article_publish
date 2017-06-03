<?php
session_start();
$article = $_POST['article_id'];
$comment = $_POST['comment'];
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);
echo $article;
$sql = "insert into cms_comment (article_id,comment_text) values('$article','$comment')";
mysql_query($sql,$db) or die(mysql_error($db));
if(mysql_insert_id($db))
{
       header('Location: /articles2.php');

}
?>