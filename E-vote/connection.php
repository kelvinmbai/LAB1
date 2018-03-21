<?php 
$servername="localhost";
$serveruser="root";
$serverpass="";
$dbname="testing";
$conn=mysqli_connect($servername,$serveruser,$serverpass,$dbname);
if(mysqli_connect_errno()){
	die("Connection Failed: " . mysqli_connect_error()."(".mysqli_connect_errno().")");
}
else{
}

?>