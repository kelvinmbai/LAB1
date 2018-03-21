<?php
require_once("connection.php");
if(isset($_POST["insert"])){
$file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$mysqli_result="INSERT INTO image values ('$file')";
$run = mysqli_query( $conn,$mysqli_result);
	if(!$run) {
		echo mysqli_error($connection);
	}
	
?>