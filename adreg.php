<html>
<head>
<center><h1>Faculty Register</h1><a href="adhome.php">Back</a><br>
<script>
function check()
{
var username=document.f1.fname.value;
var userpass=document.f1.fpass.value;
var usercpass=document.f1.fcpass.value;
if(username.length<10)
{
alert('username must be 10 letters');
return false;
}
else
{
if(userpass==usercpass)
{
return true;
}
else
{
alert("password not match");
return false;
}
}
}
</script>
</head>
<body>
<br><br><br><br>
<form name='f1' method='post' action='#'>
<input type="text" name="fname" placeholder="name" required><br><br>
<input type="password" name="fpass" placeholder="password" required><br><br>
<input type="password" name="fcpass" placeholder="Confirmpassword" required><br><br>
<input type="submit" value="submit" name="facsub" onclick="return check()">
</form>
</body>
</html>

<!------------this is the php code for registaion-------------->
<?php
if(isset($_POST['facsub']))
{
$namefac=$_POST['fname'];
$passfac=$_POST['fcpass'];

include'db.php';
if(!$conn)
{  
  die('Could not connect: '.mysqli_connect_error());  
}
else
{
	$sql = "INSERT INTO facultyreg(facname,facpassword)VALUES('$namefac','$passfac')";  
if(mysqli_query($conn, $sql))
{  
 echo "Success";  
}
else
{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
}
}
?>