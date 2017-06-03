<?php
require_once('login.php');
?>




<p>Please enter your username and desired password to sign up to Mismatch.</p>
<form method="post" action="adding.php">
<fieldset>
<legend>Registration Info</legend>
<label for="name">name:</label>
<input type="text" id="name" name="name"/><br />
<label for=" district">district:</label>
<input type="text" id="district" name="district"/><br />
<label for=" email">state:</label>
<input type="text" id="state" name="state"/><br />
</fieldset>
<input type="submit" value="add" name="add" />
</form>








<form method="post" action="sub.php">
<fieldset>
<legend>Registration Info</legend>
<label for="name">name:</label>
<input type="text" id="name" name="name"
value="" /><br />
<label for=" district">district:</label>
<input type="text" id="district" name="district" value=""/><br />
<label for=" email">state:</label>
<input type="text" id="state" name="state" value=""/><br />
</fieldset>
<input type="submit" value="sub" name="sub" />
</form>



</body>
</html>