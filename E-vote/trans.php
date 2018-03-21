<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
.div
{
	
	padding:12px 200px;
margin: 8px 26px;
	position:relative;
	top:300px;
	margin-left:-90px;
	
	background-color:pink;
}
</style>
<style>
body{
;
background-image:url('images/FreeVector-Blue-Sky-Vector-1.jpg ');
background-size:cover;
font-family:Verdan;
font-size:15px;
margin:0;
line-height:24px;
}
.navbar{
text-allign:center;
width:100%;
background:blue;
opacity:0.6;
}
.navbar ul{
margin:0;
padding:0;
list-style:none;
position:relative;
}
.navbar ul li a{
display:block;
padding:25px;
color:white;
text-decoration:none;
width:150px;
}
.navbar ul:after{
content:"";clear:both;
display:block;
}
.navbar ul li{
float:left;
listy-style:none;}
.navbar ul ul{
display:none;

}
.navbar ul li:hover> ul{
display:block;
}
.navbar ul li:hover{
blackground:blue;
transition:0.9s;
}
.navbar ul li:hover a{
color:white;
}
.navbar ul ul{
background:blue;
padding:0;
margin:0;
position:absolute; top:100%;
}
.navbar ul ul li{
float:none;
position:relative;
}
.navbar ul ul li a{padding:25px;
color:white;
width:300px;
text-align:left;
}
.navbar ul ul li a:hover{
background:lightblue;
color:blue;
transition:0.9s;
}
</style>
<style>
*{margin:@px; padding:@px; font-family:Helvetica, Arial, sans-serif;}
/*full-width input fields*/
inpt[type=text], input[type=password]{
width:90%;
padding:12px 20px;
margin: 8px 26px;
display: inline-block;
border:1px solid #ccc;
box-sizing:border-box;
font-size:16px;
}
/*set a style for all buttons*/
button{
background-color:#4CAF50;
color:white;
padding:14px 26px;
margin:8px 26px;
border:none;
cursor:pointer;
width:90%;
font-size:26px;
}
button:hover{
opacity:0.8;
}
/*center the image and position the close button*/
.imgcontainer{
text-align:center;
margin:24px 0 12px 0;
position:ralative;
}
/*the modal (background)*/
.modal{
display:none;
position:fixed;
z-index:1;
left:0;
top: 0;
width:100%;
height:100%;
overflow:auto;
background-color:rgba(0,0,0,0.4);
}
/*modal content box */
.modal-content{
background-color:lightblue;
margin:4% auto 15% auto;
border: 1px solid #888;
width:40%;
padding-button:30px;
}
/*the close button(*) */
.close{
position:absolute;
right:25px;
top:0;
color:#000;
font-size:35px;
font-weight:bold;
}
.close:hover..close:focus{
}
.div
{
	position:relative;
	left:100px;
	width:100px;
	height:100px;
	background-color:white;
}
<style>
.animate{
animation:zoom 0.6s;
}
@keyframes zoom{
from{tranform: scale(0)}
to {transform: scale(1)}
}

}
</style>
</style>
</head>
<body>
<div class="navbar">
<ul>
<li><a href ="#">Home</a>
<ul>
<li><a href ="#">mtaa</a></li>
<li><a href ="#">kwetu</a></li>
<li><a href ="#">php</a></li>
<li><a href ="#">asp</a></li>
<li><a href ="#">more</a></li>


</ul>
</li>
<li><a href ="#">tutorial</a>
<ul>
<li><a href ="#">html</a></li>
<li><a href ="#">css</a></li>
<li><a href ="#">php</a></li>
<li><a href ="#">asp</a></li>
<li><a href ="#">more</a></li>


</ul>
</li>

<li><a href ="#">Events</a>
<ul>
<li><a href ="#">foot ball</a></li>
<li><a href ="#">politics</a></li>
<li><a href ="#">bb</a></li>
<li><a href ="#">news</a></li>
<li><a href ="#">more</a></li>
</ul>
</li>
<li><a href ="#">contacts</a></li>
<li><button  onclick="document.getElementById('modal-wrapper').style.display='block'"style="width:200px; margin-top:50px; margin-left:800px;">
Click  login</button> </li>
</ul>
</div>
<div class="div">
<font color="lightblue"><p>the best thing you</p></font>

</div>


<div id="modal-wrapper" class="modal">
<form class="modal-content animate" method="POST" action="validate.php">
<div class="imgcontainer">
<span onclick="document.getElementById('modal-wrapper').style.display='none'"class="close" title="close popUp">&times;</span>
<img src="images/images-14.jpeg" alt="Avatar" class="avatar">
<h1> <style="text-aliign:center"> <font color="white">Enter Your Credentials</font></h1>

<div class="container">
<input type="text" placeholder="Enter Username" name="username">
<input type="password" placeholder="Enter password" name="password">
<input type="checkbox" name="remember" style="margin:26px 30px;">Remember me
<input type="submit" name="login"  value="login">

<a href="a" style="text-decoretion:none; float:right; margin-right:34px;margin-top:26px;">Forgort password ?</a>

</form>
</div>
<script>
//if user clicks anywhere outside of the modal the modal close
var modal=document.getElementById('modal-wrapper');
window.onclick=function(event){
if(event.target == modal){
modal.style.display="none";
}
}</script>

</body>
</html>


