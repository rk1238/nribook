<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>WELCOME PAGE</title>
<body background="welcom.jpg">
<?php include("menu.php"); ?>  

<h1><?php
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
else
{
	$iroll=$_SESSION['us'];
	$sql="select profilepic,name from nristudent where rollno=\"$iroll\" ";
	$insival=mysqli_query($conn, $sql);
		
					if(mysqli_num_rows($insival) > 0)
					{
						while($ig=mysqli_fetch_assoc($insival))
						{
							$path=$ig['profilepic'];
							$name=$ig['name'];
							
						}
					}
}
echo '<table>';
echo '<tr><td>';
echo "<img src='$path'  height='120' width='120'>";
echo '</td>';
echo '<td>';
echo "<p id='rr'><strong>$name</strong></p>";
echo '</tr></td>';
echo '</table>';
?></h1>

</body>
<style>

#myTopnav
{
	background-color:transparent;
	
}
#rr
{
	color:#ff9933;
	size:50px;
	 font-size: 27px;
	 color: #3333cc;
	  overflow: hidden;
    float: left;
}
img
{
	border-radius:50%;
}
#myTopnav
{
	background-color:#FFF;
	position:fixed;
	height:auto;
	width:2000px;
	 padding: 8px 16px;
	 top:0px;
	  border: 1px  groove #d2d2d2;
	 float:left;
	 margin-left:0px;
	 left:0px;
}

.topnav {
	margin:center;
    background-color: #333;
    overflow: hidden;
}
.topnav a {
    float: left;
    color: #6699ff;
    text-align: center;
 padding: 14px 26px;
 text-decoration: none;
    font-size: 17px;
}
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

</style>

</html>
