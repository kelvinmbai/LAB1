<?php
session_start();
$_SESSION['username'] = '';
$_SESSION['password'] = '';
unset($_SESSION['username']);
unset($_SESSION['password']);
session_unset();
session_destroy();
echo "you successfuly logout </br>" ;
echo header("refresh:2; url='trans.php");
?>