<html>
<head>
<center><h1>Studnt Register</h1><a href="adhome.php">Back</a>

<script type="text/javascript">  
function matchpass(){  
var selectedbranch=document.reg.branch.value;  
  var ok="-1";
if(selectedbranch==ok){  
	alert("Please Select Branch");  
return false;  
}  
else{  
return true;  
}  
}  
</script>  

</head>
<body><center>
<form name="reg" method="post" action="#" onsubmit="return matchpass()">

<div id="bro">
<table>
<tr><td><input type="text" name="sname" placeholder="Name" size="20" required id="sname"></tr></td>
<tr><td><input type="text" name="sroll" placeholder="Rollno" size="20" required id="sname"></tr></td>
<tr><td><p id="sname">Gender
<input type="radio" name="gender" value="male" id="sname" required>Male
<input type="radio" name="gender" value="female" id="sname" required>Female</p></tr></td>

<tr><td><input  type="text" placeholder="Email"  name="email" required id="sname"></tr></td>
<tr><td><input  type="text" placeholder="Phone"  name="phone" required id="sname"></tr></td>


<tr><td><select name="branch" id="sname" required>
<option value="-1" selected>select..</option>
<option value="it">IT</option>
<option value="cse">CSE</option>
<option value="ece">ECE</option>
<option value="eee">EEE</option>
<option value="mech">MECH</option>
<option value="civil">CIVIL</option>
</select></tr></td>

<tr><td><input type="submit" value="submit" id="sname" name="stusub" >
</table>
</div>
</form>
</body>
<style>
#sname
{
	font-size:20px;
}
#bro
{
	border:20px;
	margin-top:10%;
	
}
</style>
</html>

<?php

if(isset($_POST['stusub']))
{
$roll=$_POST["sroll"];
$nname=$_POST["sname"];
$ngender=$_POST["gender"];
$nemail=$_POST["email"];
$nphone=$_POST["phone"];
$nbranch=$_POST["branch"];

$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  

if($roll!=null||$nname!=null)
{
$sql = "INSERT INTO insertstudent(rollno,name,gender,email,phone,branch)VALUES('$roll','$nname','$ngender','$nemail','$nphone','$nbranch')";  
if(mysqli_query($conn, $sql)){  
 echo "Success";  
}
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
}
?>
