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
	margin-left: 300px;
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

if(isset($_POST['insert'])){
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"liverpool");


$v1=$_POST["name"];
$v2=$_POST["position"];
$v3=$_POST["height"];
$v4=$_POST["weight"];
$v5=$_POST["foot"];
$v6=$_POST["birthdate"];
$v7=$_POST["age"];
$v8=$_POST["kit"];
$v9=$_POST["club"];
$v10=$_POST["country"];
$v11=$_POST["ballcontrol"];
$v12=$_POST["dribbling"];
$v13=$_POST["crossing"];
$v14=$_POST["shortpass"];
$v15=$_POST["longpass"];
$v16=$_POST["marking"];
$v17=$_POST["slide"];
$v18=$_POST["stand"];
$v19=$_POST["acc"];
$v20=$_POST["stam"];
$v21=$_POST["strength"];
$v22=$_POST["sprint"];
$v23=$_POST["agility"];
$v24=$_POST["jumping"];
$v25=$_POST["heading"];
$v26=$_POST["shotpower"];
$v27=$_POST["finish"];
$v28=$_POST["longshot"];
$v29=$_POST["curve"];
$v30=$_POST["fkacc"];
$v31=$_POST["penalty"];
$v32=$_POST["volley"];




$query="insert into player VALUES('$v1','$v2',$v3,$v4,'$v5','$v6',$v7,$v8,'$v9','$v10',$v11,$v12,$v13,$v14,$v15,$v16,$v17,$v18,$v19,$v20,$v21,$v22,$v23,$v24,$v25,$v26,$v27,$v28,$v29,$v30,$v31,$v32)";


if($row=mysqli_query($con,$query))
{
   echo '<span style="font-size:30px;">The record '.$v1.' was successfully inserted.</span>' ; 
} else {
	echo '<span style="font-size:30px;">The record was not successfully inserted';
    echo "Error: " . $row . "<br>" . mysqli_error($con);
}
	 
}
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