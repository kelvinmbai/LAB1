<?php
 
if(isset($_POST["submit"]))  
 {  
 $name=$_POST['subject'];  
 
 function clean_text($string){
 
}
$file_open = fopen("contact_data.csv","a");
$no_rows = count(file("contact_data.csv"));
$form_data = array('subject' => $name);
fputcsv($file_open,$form_data);
 
     /* $query = "INSERT INTO president(subject) VALUES ('$name')"; 

$fileHandle = fopen("myDataFile", 'W');
 fwrite($fileHandle, $name);
 fclose($fileHandle);
 $fileHandle = fopen("myDataFile", 'r');
 $theInfo = fgets($fileHandle);
 fclose($fileHandle);
 echo $theInfo;
	 
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("submitted successfully")</script>';  
      } */ 
 }  
 ?>  