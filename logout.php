<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header('Location:index2.php')
?>
<a href = index2.php>Login</a>