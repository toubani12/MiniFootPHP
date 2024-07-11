<?php
session_start();
session_destroy();
setcookie('id', '', time() - 3600, '/');
setcookie('admin', '', time() - 3600, '/');
header('location:login.php');
?>
