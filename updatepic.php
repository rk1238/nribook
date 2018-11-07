<html>
<head>

<script type="text/javascript">  
function matchpass(){  
var firstpassword=document.f1.newpass.value;  
var secondpassword=document.f1.conpass.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
}  
</script>  
</head>
<body>
<table>
<div class="topnav" id="myTopnav">
 <a class="active" href="welcom.php"><strong>Home</strong></a>
  <a href="updatepic.php"><strong>UpdateProfile</strong></a>
 <a href="timiline.php"><strong>Timeline</strong></a>
  <a href="complaint.php"><strong>Complaint</strong></a>
  <a href="logout.php"><strong>logout</strong></a>
</div>

<h1><?php
session_start();
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
<div class='allhere'>
<div class="im">
<h1>Update Picture</h1>
<form  method="post"  action="getprofilepic.php" enctype="multipart/form-data">

<input type="file"  name="fileToUpload" style="cursor:pointer;">
<input type="submit"  name="submit" value="Update" style="cursor:pointer;">
</form>



<td><div class="jjm">
<h1>Update Password</h1>
<form name="f2" method="post" action="updatepass.php" onsubmit="return matchpass()">
<input type="password" name="oldpass" placeholder="Old Password" required><br>
<input type="password" name="newpass" placeholder="New Password" required><br>
<input type="password" name="conpass" placeholder="Confirm Password" required><br>
<input type="submit" name="updatepass" value="Update" style="cursor:pointer;">
</form>

<div class="kkm">
<h1>Update Name</h1>
<form name="f1" method="post" action="updatename.php" >
<input type="text" name="newname" placeholder="New Name" required><br>
<input type="password" name="oldpass" placeholder="Enter Password" required><br>
<input type="submit"  class='btn' name="updatename" value="Update" style="cursor:pointer;">
</form>
</div>
</div>
</div>
</body>
<style>

#myTopnav
{
	background-color:transparent;
}

.im
{
 background-color:#ffffff;
	height:auto;
	width:48%;
	float:middle;
	margin-top:1%;
	margin-bottom:1%;
	margin-left:15%;
	margin-right:10%;
	 padding: 9px 4px 63px 0px;
	 border: 1px #330033;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: left;

}
.jm
{
 background-color:#ffffff;
 height:auto;
	float:left;
	width:48%;
margin-left:15%;
	margin-right:10%;
	
	 padding: 9px 4px 63px 0px;
	 border: 1px #330033;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: left;
}
.km
{
	background-color:#ffffff;
	height:auto;
	width:48%;
	float:right;
	
	 padding: 9px 4px 63px 0px;
	 border: 1px #330033;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: left;
		
}
.topnav {
	margin:left;
    background-color: #333;
    overflow: hidden;
}
img
{
	border-radius:50%;
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

body
{
	background-color:#efefef;
}
.btn {
    position: absolute;
  margin-top:3%;
	margin-bottom:1%;
	margin-left:05%;
	margin-right:10%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    color: black;
    font-size: 10px;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.btn:hover {
    background-color: black;
    color: white;
}

</style>
</html>




