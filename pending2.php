<?php
session_start();
$pend = $_SESSION['pend_id'];
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);
$sql="select *from cms_pending where pend_id = '$pend'";
$result = mysql_query($sql,$db);
$row= mysql_fetch_array($result);


#foreach($rows as $row) {
#echo $row["title"];
#}
#print_r($row[0]);


?>
<html>
<form method="post" action="articles1.php">

<p>TITLE:-<?php echo $row['title'];?></p>
<input type="hidden" name="title" value="<?php echo $row['title'] ;?>"/>
<p>TEXT:-</p>
<p> <textarea rows="20" cols="60" name="textarea"> <?php echo $row['article_text'] ;?> </textarea></p>
<p><input type="submit" name="submit" value="publish article"></p>
</form>
<form method="get" action="delete1.php">
<input type="hidden" name="pending" value="<?php echo $pend ;?>"/>
<input type="submit" name="Delete Artical" value="Delete">
</form>

</html> 