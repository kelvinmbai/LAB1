<?php
$connect = mysqli_connect("localhost", "root", "", "candidates"); 

     /* $query = "INSERT INTO president(subject) VALUES ('$name')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("submitted successfully")</script>';  
      } */ 
  
 ?>  
<html>
<head>
<title>My Image Gallery</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css"/>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

</head>
<body>
<form action="file.php" method="post">
<?php
session_start();
echo"Welcome ". $_SESSION['username']."</br>";
echo "<a href='logout.php'>logout</a>";
?>
<h1> LETS GET THE RACE STARTED</h1>
<div class="gallery">
 <form method="post" enctype="multipart/form-data">  
 <?php  

 $connect = mysqli_connect("localhost", "root", "", "testing"); 
                $query = "SELECT * FROM tbl_images where id=1";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
			 echo '
<a href="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" data-lightbox="mygallery" data-title="peter mua"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] )  .'" height="200" width="200" class="img-thumnail" /></a>
<input value="Peter" name="subject" class="subject-list" type="checkbox">
Peter  </br>


   ';  
                }  
				$query = "SELECT * FROM tbl_images where id=6";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
			 echo '
<a href="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" data-lightbox="mygallery" data-title="shiru"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] )  .'" height="200" width="200" class="img-thumnail" /></a>
<input value="shiru" name="subject" class="subject-list" type="checkbox">shiru  </br>


   ';  
                }  
				$query = "SELECT * FROM tbl_images where id=8";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
			 echo '
<a href="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" data-lightbox="mygallery" data-title="stula"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] )  .'" height="200" width="200" class="img-thumnail" /></a>
<input value="stula" name="subject" class="subject-list" type="checkbox">stula  </br>


   ';  
                } 
				$query = "SELECT * FROM tbl_images where id=9";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
			 echo '
<a href="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" data-lightbox="mygallery" data-title="sonko"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] )  .'" height="200" width="200" class="img-thumnail" /></a>
<input value="sonko" name="subject" class="subject-list" type="checkbox">sonko  </br>


   ';  
                } 
				echo'<input type="submit" name="submit"  value="submit" color="blue">';
                ?>  
</div>
</form>
    <script type="text/javascript">
	    $('.subject-list').on('change', function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
    </script>
</form>
</body>
</html>
<script>
$(document).ready
</script>