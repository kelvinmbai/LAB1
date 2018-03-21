<?php
$connect = mysqli_connect("localhost", "root", "", "candidates"); 
if(isset($_POST["submit"]))  
 {  
 $name=$_POST['subject'];  
 $fileHandle = fopen("myDataFile", 'W');
 fwrite($fileHandle, $name);
 fclose($fileHandle);
 $fileHandle = fopen("myDataFile", 'r');
 $theInfo = fgets($fileHandle);
 fclose($filrHandle);
 echo $theInfo;
     /* $query = "INSERT INTO president(subject) VALUES ('$name')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("submitted successfully")</script>';  
      } */ 
 }  
 ?>  