<html>
<head>
	<style>
	body{
	background-color: #000015;
	 background-image: url("../images/wallpaperhome.jpg");
	 background-repeat: no-repeat;
	 background-attachment: fixed;
	 background-position: center;
	 background-size: 100%;
	}
	#logo{ 
	padding-left: 150px;
	float:left;
	position:absolute;
	background-color: none;

}

select{
	padding:5px 40px;
}

@font-face {
    font-family: font1;
    src: url("../fonts/Arvo-Regular.ttf");
}

#menubar ul{
	float:left;
	list-style-type: none;
	width:100%;
	overflow:hidden;
	border-radius:30px;
	font-family: font1;
	font-size:25px;

}
#menubar li{
	float:left;
}
#menubar li:first-child{
	float:left;
	margin-left: 600px;
}


#menubar li a{
	text-decoration: none; 
	/*color:#00b8e6;*/
	color:white;
	text-align:center;
	padding:20px;
	display:block;	
	/*background-color: #dddddd;*/
}

#menubar li a:hover{
	/*background-color: #00b8e6;*/
	background-color: #ebebeb	;
	border-radius:30px;
	color:black	;
}
#linkbar{
	height:43px;
	width:1200px;
	clear:both;
	background-color:#ebebeb;
	margin-bottom: 0px;
}


     #sponsors{
	width:1200px;
	background:#ebebeb;
	height:230px;
	color:white;
	clear:both;
	padding-top: 35px;
	margin-bottom:0px;
}

#copyrights{
	
	width:1200px;
	float:left;
	background:#C60001;
	color:white;
	/*clear:both;*/
}

#copy{
	font-family:font1;
	font-size:15px;
}
     

	</style>
</head>





<body>

<center>

<div id="container" style="width:1200px">
<center>
<div style="background-color:#C60001;width:1200px;height:190px;">
			<div id="logo">
				<img src="../images/logo.jpg"/>
			</div>
			

			<div id="menubar">
			<br><br>
				<ul>
				<li><a href="../frontpage.html">Home</a></li>
				<li><a href="../news.html">News</a></li>
				<li><a href="../team.php">Team</a></li>
				<li><a href="../video.html">Videos</a></li>		
				<li><a href="club.php">Club</a></li>
				</ul>
			</div>

			</center>
			<div id="linkbar">
			<p style="float:right;margin-top:5px;margin-bottom:0px;">
			<a href="" title="Visit Liverpool FC on Facebook"><img src="../images/social icons/facebook.png"/></a> &nbsp;&nbsp;
			<a href="" title="Visit Liverpool FC on youtube"><img src="../images/social icons/youtube.png"/></a> &nbsp;&nbsp;&nbsp;
			<a href="" title="Visit Liverpool FC on Twitter"><img src="../images/social icons/twitter.png"/></a>&nbsp;&nbsp;&nbsp;
			<a href="" title="Visit Liverpool FC on Google+"><img src="../images/social icons/google.png"/></a>&nbsp;&nbsp;&nbsp;
			</p>	
		</div>
	</div>
 	 	 
<div style="background-color: white;">

<br><br><br><br><br>
<button type="button" onclick="location.href='../team.php'"> Click here to go back</button><br><br><br><br>
<?php 
$name=$_GET['yes'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"liverpool");

$query="delete from player WHERE name='$name'";


$row=mysqli_query($con,$query);

$number=mysqli_affected_rows($con);

if($number==0)
{
	echo '<span style="font-size:30px;">The record ".$name." was not successfully deleted as it does not exist</span>' ; 
}
else
	echo '<span style="font-size:30px;">The record <span>'.$name.'<span style="font-size:30px;"> was  successfully deleted  </span>'; 

?>
<br><br>

</div>
<div id="sponsors" >
			<center>
					<img src="../images/sponsor/standard.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="../images/sponsor/nb.png"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="../images/sponsor/Garuda.png">
					<br>
					<br>
					<br>
					<img src="../images/sponsor/carlsberg.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="../images/sponsor/dd.png"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="../images/sponsor/ea.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="../images/sponsor/gatorade.png"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<img src="../images/sponsor/jack.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			</center>
			</div>


			<div id="copyrights">
					<p align="center" id="copy">
					<img src="../images/players/logo.jpg" width="10%" height="25%"/><br>
					&copy; Abhishek Sampath. This is strictly educational and academical.<br>
					Developed by Abhishek Sampath
					</p>
			</div>



</div>	
</center>

</body>
</html>