<?php
unset($_COOKIE['name']);
setcookie("name","", time() - 3600);
header('location:login.php');
exit;