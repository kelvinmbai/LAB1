<?php
require_once("connection.php");
if(isset($_POST['login'])){
	$email = $_POST['username'];
	$pass = $_POST['password'];
	
	$get="select * from users where username='$email' and password='$pass'";
	

$run = mysqli_query($conn,$get);
	
	
	
	if(mysqli_num_rows($run) > 0) {
		session_start();
		$_SESSION['username']=$email;
		
		header("location:president.php");	
	}
	else{
		echo "username or password incorrect try again";
		echo header("refresh:2; url='trans.php");
	}
}
else{
	header("location:trans.php");
}
 











?>