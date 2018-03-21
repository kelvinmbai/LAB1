<?php
session_start();
echo"Welcome ". $_SESSION['username']."</br>";
echo "<a href='logout.php'>logout</a>";
?>