<center><h1>Admin Login</h1>
<form  method="post" action="#">
<input type="text" name="fname" placeholder="username" required><br><br>
<input type="password" name="fpass" placeholder="password" required><br><br>
<input type="submit" name="adminlog" value="Login"><br><br>
</form>

<?php
session_start();
include'db.php';
if(isset($_POST['adminlog']))
{
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
else
{
$lname=$_POST['fname'];
$lpass=$_POST['fpass'];
//$propic='photo/nobody_m.original.jpg';

// here we set the session varible
$_SESSION['uk']=$lname; // * we set seeion here.by this we surf the whole page
$sql = "SELECT * FROM  facultyreg WHERE facname='$lname' and facpassword='$lpass'"; 

$retval=mysqli_query($conn, $sql);  
$nog=mysqli_num_rows($retval);
		if($_SESSION['uk']!=null)
		{
			if($nog > 0)
			{
				header("Location: adhome.php?logedin");
			}
			else
			{	
				echo"<script>alert('user name or password wrong')</script>";
				header("refresh:0;Location: facultylog.php");
			}
		}
}
}
?>