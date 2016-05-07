<?php
session_start();
$_SESSION["valid"]=0;

?>

<html>
<head>
<title> Team database
</title>

<style>

.button {
  width: 200px;
  padding:10px;
  margin: 20px;	
  font-size: 15px;
  border: 3px solid #c60001;
  color: white;
  background: #333333;
  white-space: nowrap;
  box-shadow: 0 0 5px #C60001;
  border-radius: 30px;
  -webkit-animation: over 6s infinite;
  animation: over 6s infinite;
}

button{
	padding:3px;
	margin:5px;
}

body{
	background-color: #000015;
	 background-image: url("images/wallpaperhome.jpg");
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

@font-face {
    font-family: font1;
    src: url("fonts/Arvo-Regular.ttf");
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

#f input{
	padding:5px;
	border-radius: 10px;
	height:40px;
	width:200px;
	border:2px solid #C60001;
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

input:focus:valid
{
	background-image: url('images/arrow/tick.png');
	background-size: 10%;
	background-position: 85%;
	background-repeat: no-repeat;
}

input:focus:invalid
{
	background-image: url('images/arrow/cross.png');
	background-size: 5%;
	background-position: 85%;
	background-repeat: no-repeat;

}

#loginDiv{
	float:right;
	width:300px;
	padding:10px;

}

#logoutbtn,#loginbtn{
	padding:5px;
	background-color: #4f4f4f;
	border:3px solid black;
	color: white;
	font-family: arial;
}
#logoutbtn:hover,#loginbtn:hover
{
	background-color: #c60001;
}

select{
	padding:5px 40px;
}
</style>


<?php
$status=0;
if(isset($_POST['logout']))
{
	$_SESSION["valid"]=0;
}
?>

<?php

if(isset($_POST['loginsubmit']))
{
	$con = mysqli_connect("localhost","root","","liverpool");
	$username=$_POST["username"];
	$_SESSION["username"]=$username;
	$password=$_POST["password"];

$query="SELECT username,password FROM login where username='$username' and password='$password'"; 

$result=mysqli_query($con,$query);
if(!$result)
{
	
echo  mysqli_error($con);
}


$count=mysqli_num_rows($result);


if($count==1)
{
	$_SESSION["valid"]=1;
	echo"done";
}	
else{
	$status=1;
}

}
?>

</head>


<body>

<center>

<div id="container" style="width:1200px;background-color: white;">
<div style="background-color:#C60001;width:1200px;height:190px;">
			<div id="logo">
				<img src="images/logo.jpg"/>
			</div>
			

			<div id="menubar">
			<br><br>
				<ul>
				<li><a href="frontpage.html">Home</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="team.php">Team</a></li>
				<li><a href="video.html">Videos</a></li>		
				<li><a href="club.php">Club</a></li>
				</ul>
			</div>
			<div id="linkbar">
			<p style="float:right;margin-top:5px;margin-bottom:0px;">
			<a href="" title="Visit Liverpool FC on Facebook"><img src="images/social icons/facebook.png"/></a> &nbsp;&nbsp;
			<a href="" title="Visit Liverpool FC on youtube"><img src="images/social icons/youtube.png"/></a> &nbsp;&nbsp;&nbsp;
			<a href="" title="Visit Liverpool FC on Twitter"><img src="images/social icons/twitter.png"/></a>&nbsp;&nbsp;&nbsp;
			<a href="" title="Visit Liverpool FC on Google+"><img src="images/social icons/google.png"/></a>&nbsp;&nbsp;&nbsp;
			</p>	
		</div>
		
	</div>
 	 	 

<br><br>


<div id="loginDiv"> 

<p id="stat">
	
	<?php
		if($status==1)
		{
			echo "Invalid credentials. Please try again.";
		}
	?>
</p>
<button type="button" id="loginbtn" style=" margin-right: 30px;font: white;" onclick='document.getElementById("login").style.display="block"'>Admin Login</button>


<div id="login" style="display:none">
<br>

<form action="" method="post">
Username : <input type="text" name="username" id="username">
<br><br>
Password : <input type="password" name="password" id="password">
<br><br>
<input type="submit" name="loginsubmit" id="loginsubmit" value="login">
</form>
</div>


<div id="logout" style="display:none">
<h3>Hey <?php echo $_SESSION["username"]; ?> ,</h3>
<form action="" method="POST">
<input type="submit" name="logout" id="logoutbtn" value="Logout" style="margin-right:20px;padding:5px;" >
</form>
</div>

</div>
	


<br><br><br><br>



<center>

<h3 style="clear:both;margin-left:40%;float:left;">Select an Option</h3><br>
<div style="clear:both;margin-left: 15%">
<button type="button" id="searchbtn" class="button" style="float: left;" onclick='document.getElementById("searchform").style.display="block"'> Search Player</button>
<button type="button" id="insertbtn" style="float:left;" class="button"onclick='document.getElementById("insertform").style.display="block"'> Insert Player</button>
<button type="button" id="deletebtn" style="float:left;" class="button" onclick='document.getElementById("deleteform").style.display="block"'> Delete Player</button>
</div>
</center>
<br><br><br>
<div id="searchform" style="display:none;clear:both;">
<form action="team/searchteam.php" method="GET" >
        Select a player : <!-- <input type="text" id="name" name="name" /> -->
<?php
        
$con= mysqli_connect("localhost","root","","liverpool");

$query="SELECT name,kit FROM player order by name"; 

$result=mysqli_query($con,$query);

echo "<select name='name' id='name' value='name'>Player Name</option>";

while($row = $result->fetch_assoc()) {

echo "<option value=$row[name]>$row[name]</option>";


}

 echo "</select>";

 ?> 

        <input type="submit" name="submit" value="Search" />
    </form>
</div>


<div id="insertform" style="display:none;">

<fieldset style="border:#C60001;border-style:solid;clear:both;">
<legend ><span style="font-size:30px;">Player Details</span></legend>
<form action="team/insertteam.php" method="POST" id="f" >
<br><br><br><br>
         <input type="text" id="name" name="name" placeholder="Name" / pattern="^[a-zA-Z]*$" required> &nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" id="position" name="position" placeholder="Position" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="height" name="height" placeholder="Height" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="weight" name="weight" placeholder="Weight" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" id="foot" name="foot" placeholder="Preferred Foot" pattern="^[a-zA-Z]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="date" id="birthdate" name="birthdate" placeholder="Birthdate" required/><br><br>
         <input type="number" id="age" name="age" placeholder="Age" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="kit" name="kit" placeholder="Kit Number" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" id="club" name="club" placeholder="Club" pattern="^[a-zA-Z]*$" required/><br><br>
         <input type="text" id="country" name="country" placeholder="Country" pattern="^[a-zA-Z]*$"  required/>&nbsp;&nbsp;&nbsp;&nbsp;
         
         <input type="number" id="ballcontrol" name="ballcontrol" placeholder="Ball Control" pattern="^[0-9]*$" required />&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="dribbling" name="dribbling" placeholder="Dribbling" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="crossing" name="crossing" placeholder="Crossing" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="shortpass" name="shortpass" placeholder="Short Pass" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="longpass" name="longpass" placeholder="Long Pass" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="marking" name="marking" placeholder="Marking" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="slide" name="slide" placeholder="Slide" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="stand" name="stand" placeholder="Stand" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="acc" name="acc" placeholder="Acceleration" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="stam" name="stam" placeholder="Stamina" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="strength" name="strength" placeholder="Strength" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="sprint" name="sprint" placeholder="Sprint" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="agility" name="agility" placeholder="Agility" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="jumping" name="jumping" placeholder="Jumping" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="heading" name="heading" placeholder="Heading" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="shotpower" name="shotpower" placeholder="Shot Power" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="finish" name="finish" placeholder="Finish" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="longshot" name="longshot" placeholder="Long Shot" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="curve" name="curve" placeholder="Curve" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="fkacc" name="fkacc" placeholder="Freekick Accuracy" pattern="^[0-9]*$" required/><br><br>
         <input type="number" id="penalty" name="penalty" placeholder="Penalty" pattern="^[0-9]*$" required/>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" id="volley" name="volley" placeholder="Volley" pattern="^[0-9]*$" required/><br><br>
         



         <input type="submit" name="insert" value="Insert" />
   
    </form>
    </fieldset>	
</div>



<div id="deleteform" style="display:none;clear:both;">
<form action="team/deleteteam.php" method="GET" >

 Select a player : <!-- <input type="text" id="name" name="name" /> -->
<?php
        
$con= mysqli_connect("localhost","root","","liverpool");

$query="SELECT name,kit FROM player order by name"; 

$result=mysqli_query($con,$query);

echo "<select name='name' id='name' value='name'>Player Name</option>";

while($row = $result->fetch_assoc()) {

echo "<option value=$row[name]>$row[name]</option>";


}

 echo "</select>";

 ?> 
        <input type="submit" name="submit" value="Delete" />
    </form>
</div>




<script>
if(<?php echo $_SESSION["valid"]; ?>==0)
{
	document.getElementById("loginbtn").style.display="block";
	document.getElementById("logout").style.display="none";

	document.getElementById("searchbtn").style.margin="0% 0% 0% 25%";
	document.getElementById("insertbtn").style.display="none";
	document.getElementById("deletebtn").style.display="none";
}

else if(<?php echo $_SESSION["valid"]; ?>==1)
{	
	document.getElementById("loginbtn").style.display="none";
	document.getElementById("login").style.display="none";
	document.getElementById("logout").style.display="block";

	document.getElementById("searchbtn").style.margin="20px 20px 0px 20px";
	document.getElementById("insertbtn").style.display="block";
	document.getElementById("deletebtn").style.display="block";
}
</script>



<div id="sponsors" >
			<center>
					<img src="images/sponsor/standard.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="images/sponsor/nb.png"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="images/sponsor/Garuda.png">
					<br>
					<br>
					<br>
					<img src="images/sponsor/carlsberg.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="images/sponsor/dd.png"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="images/sponsor/ea.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="images/sponsor/gatorade.png"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<img src="images/sponsor/jack.png" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			</center>
			</div>


			<div id="copyrights">
					<p align="center" id="copy">
					<img src="images/players/logo.jpg" width="10%" height="25%"/><br>
					&copy; Abhishek Sampath. This is strictly educational and academical.<br>
					Developed by Abhishek Sampath
					</p>
			</div>

</div>	
</center>
</body>
</html>
