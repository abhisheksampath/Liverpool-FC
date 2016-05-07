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

 th,td
{
padding:7px;
font-family: none;
color:#666;
}
table {
    border: 1px solid #CCCCCC;
    border-radius: 6px 6px 6px 6px;
    border-spacing: 0;
    margin: 30px;


}        
tr th:first-child {
    border-radius: 6px 0 0 0;
}
tr th:last-child {
    border-radius: 0 6px 0 0;
}

tr td:first-child, table th:first-child {
    border-left: medium none;
}




#player{
	height:800px;
	width:1200px;
	float:left;
	background-color: none;
	clear:both;

}

.right{text-align:right;}

.second{
	width:210px;
	height:350px;
	float:left;
	}

.third{
	clear:both;
	padding-left: 250px;
	padding-top: 50px;

	float:left;
}
.fourth{
	margin-top:0px;
	float:left;
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


<?php
$ar= array(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,);
$name=NULL;
if(isset($_GET['submit'])){
$name=$_GET['name'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"liverpool");

$query="select * from player WHERE name='$name'";
$recs=mysqli_query($con,$query);

$ar=mysqli_fetch_row($recs);


}

?>



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
 	 	 
<div style="background-color: white;width:1200px;float:left;">
<br><br><br><br>

<button type="button" onclick="location.href='../team.php'"> Click here to go back</button><br><br><br><br>
<form action="" method="GET" > 
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

<br><br>
<span style="font-family: font1;font-size: 25px;font-weight: bold;">Delete this player for sure? </span><br><br>


<form method="get" action="deleteplayer.php">
    <input type="hidden" name="yes" value="<?php echo $_GET['name']?>">
    <input type="submit" value="yes">
   &nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" onclick="location.href='../team.php'"> No</button><br><br>
</form>

<div id="player" style="background-color: white;float:left; >

<br><br>

<img src="../images/players/<?php 	echo $name; ?>.jpg" style="float:left;padding-top:60px">

<table style="float:left;">
	<tr style=" background-color: #C60001">
		<th style="color:#ebebeb;font-size: 20px;font-family: font1;"><?php echo $ar[0]; ?></th>
		<th></th>
	</tr>
	<tr>
	<td> Name</td>
	<td class="right"><?php echo $ar[0]; ?></td>
	</tr>
	<tr>
	<td> Position</td>
	<td class="right"><?php echo $ar[1]; ?></td>
	</tr>
	<tr>
	<td> Height</td>
	<td class="right"><?php echo $ar[2]; ?></td>
	</tr>
	<tr>
	<td> Weight</td>
	<td class="right"><?php echo $ar[3]; ?></td>
	</tr>
	<tr>
	<td> Preferred foot</td>
	<td class="right"><?php echo $ar[4]; ?></td>
	<tr>
	<td> Birth date</td>
	<td class="right"><?php echo $ar[5]; ?></td>
	</tr>
	<tr>
	<td> Age</td>
	<td class="right"><?php echo $ar[6]; ?></td>
	</tr>
	<tr>
	<td> Kit Number</td>
	<td class="right"><?php echo $ar[7]; ?></td>
	</tr>
	<tr>
	<td> Club</td>
	<td class="right"><?php echo $ar[8]; ?></td>
	</tr>
	<tr>
	<td> Country</td>
	<td class="right"><?php echo $ar[9]; ?></td>
	</tr>
	</tr>
</table>

<br><br>
<div class="second" >
<table style="float:left;">
	<tr style=" background-color: #C60001">
		<th style="color:#ebebeb;font-size: 20px;font-family: font1;">Ball Skills </th>
		<th></th>
	</tr>
	<tr>
	<td> Ball Control</td>
	<td class="right"><?php echo $ar[10]; ?></td>
	</tr>
	<tr>
	<td> Dribbling</td>
	<td class="right"><?php echo $ar[11]; ?></td>
	</tr>

</table>


<table style="float:left">
	<tr style=" background-color: #C60001">
		<th style="color:#ebebeb;font-size: 20px;font-family: font1;">Passing</th>
		<th></th>
	</tr>
	<tr>
	<td> Crossing</td>
	<td class="right"><?php echo $ar[12]; ?></td>
	</tr>
	<tr>
	<td> Short pass</td>
	<td class="right"><?php echo $ar[13]; ?></td>
	</tr>
	<tr>
	<td> Long pass</td>
	<td class="right"><?php echo $ar[14]; ?></td>
	</tr>

</table>
</div>

<div class="second" >
<br><br><br><br><br>
<table style="float:left;">
	<tr style=" background-color: #C60001">
		<th style="color:#ebebeb;font-size: 20px;font-family: font1;">Defence </th>
		<th></th>
	</tr>
	<tr>
	<td> Marking</td>
	<td class="right"><?php echo $ar[15]; ?></td>
	</tr>
	<tr>
	<td> Slide Tackle</td>
	<td class="right"><?php echo $ar[16]; ?></td>
	</tr>
	<tr>
	<td> Stand Tackle</td>
	<td class="right"><?php echo $ar[17]; ?></td>
	</tr>

</table>

</div>


<div class="third"  >

<table style="float:left;">
	<tr style=" background-color: #C60001">
		<th style="color:#ebebeb;font-size: 20px;font-family: font1;">Physical </th>
		<th></th>
	</tr>
	<tr>
	<td> Accelration</td>
	<td class="right"><?php echo $ar[18]; ?></td>
	</tr>
	<tr>
	<td> Stamina</td>
	<td class="right"><?php echo $ar[19]; ?></td>
	</tr>
	<tr>
	<td> Strength</td>
	<td class="right"><?php echo $ar[20]; ?></td>
	</tr>
	<tr>
	<td> Sprint Speed</td>
	<td class="right"><?php echo $ar[21]; ?></td>
	</tr>
	<tr>
	<td> Agility</td>
	<td class="right"><?php echo $ar[22]; ?></td>
	</tr>
	<tr>
	<td> Jumping</td>
	<td class="right"><?php echo $ar[23]; ?></td>
	</tr>

</table>

</div>

<div class="fourth" >

<table style="float:left;">
	<tr style=" background-color: #C60001">
		<th style="color:#ebebeb;font-size: 20px;font-family: font1;">Shooting </th>
		<th></th>
	</tr>
	<tr>
	<td> Heading</td>
	<td class="right"><?php echo $ar[18]; ?></td>
	</tr>
	<tr>
	<td> Shot Power</td>
	<td class="right"><?php echo $ar[19]; ?></td>
	</tr>
	<tr>
	<td> Finishing</td>
	<td class="right"><?php echo $ar[20]; ?></td>
	</tr>
	<tr>
	<td> Long shots</td>
	<td class="right"><?php echo $ar[21]; ?></td>
	</tr>
	<tr>
	<td> Curve</td>
	<td class="right"><?php echo $ar[22]; ?></td>
	</tr>
	<tr>
	<td> Freekick Accuracy</td>
	<td class="right"><?php echo $ar[23]; ?></td>
	</tr><tr>
	<td> Penalty</td>
	<td class="right"><?php echo $ar[23]; ?></td>
	</tr>
	<tr>
	<td> Volley</td>
	<td class="right"><?php echo $ar[23]; ?></td>
	</tr>

</table>

</div>

</div>

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