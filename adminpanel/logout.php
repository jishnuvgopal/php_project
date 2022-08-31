<?php
session_start();
session_unset();
session_destroy();
header('location:http://localhost/CLOUDSPRING/task3_php_project/home.php')
?>