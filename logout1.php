<?php
session_unset();
session_destroy();
header('Location: /index1.php');
?>