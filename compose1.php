<?php
#include('main1.php');
?>
<html>
<body background="bg-body.jpg">
<form method="post" action="pending1.php">
<p style="font-size:30px; font-family:comic Sans MS; color:blue;">TITLE</p>
<p><input type="text" name="title" maxlength="250" style="font-family:comic Sans MS;color:#404040;font-size:20px; white-space:pre-wrap"></p>
<br/>
<p style="font-size:30px; font-family:comic Sans MS; color:blue;">TEXT</p>
<textarea name="textarea" rows="30" cols="100" style="font-family:comic Sans MS;color:#404040;font-size:20px; white-space:pre-wrap"></textarea>
<p><input type="submit" name="submit" value="submit"></p>
</form>
</body>
</html>