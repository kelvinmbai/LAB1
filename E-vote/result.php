<DOCTYPE html>
<html>
<head>
<title>  </title>
<style>
body 
;{
	background-color:lightblue;
}

.div
{
	position:relative;
	left:100px;
	width:200px;
	height:200px;
	background-color:white;
}
</style>
</head>
<body bgcolor="lightblue">
<div class="div">
<?php
$conn=mysqli_connect("localhost","root","","candidates");
$query = "SELECT * FROM president WHERE subject ='peter' "; 
if($result=mysqli_query($conn,$query)){
$rowcount=mysqli_num_rows($result);
print"Peter:". $rowcount."\n". "vote"."</br>";
mysqli_free_result($result);
}	
?>
<?php
$conn=mysqli_connect("localhost","root","","candidates");
$query = "SELECT * FROM president WHERE subject ='shiru' "; 
if($result=mysqli_query($conn,$query)){
$rowcount=mysqli_num_rows($result);
print"shiru:". $rowcount."\n". "vote".'</br>';
mysqli_free_result($result);
}	
?>
<?php
$conn=mysqli_connect("localhost","root","","candidates");
$query = "SELECT * FROM president WHERE subject ='stula' "; 
if($result=mysqli_query($conn,$query)){
$rowcount=mysqli_num_rows($result);
print"stula:". $rowcount."\n". "vote"."</br>";
mysqli_free_result($result);
}	
?>
<?php
$conn=mysqli_connect("localhost","root","","candidates");
$query = "SELECT * FROM president WHERE subject ='sonko' "; 
if($result=mysqli_query($conn,$query)){
$rowcount=mysqli_num_rows($result);
print"sonko:". $rowcount."\n". "vote"."</br>";
mysqli_free_result($result);
}	
?>
</div>
</body>
</html>