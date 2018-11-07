<?php
session_start();
$uroll=$_SESSION['us'];
if(isset($_POST['updatepass']))
{
	$oldpassword=$_POST['oldpass'];
	$newpassword=$_POST['newpass'];
	$confirmpassword=$_POST['conpass'];
	
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
else
	{
	$sql="update nristudent set password=\"$confirmpassword\" where rollno=\"$uroll\" and password=\"$oldpassword\" ";
	if(mysqli_query($conn, $sql))
		{  
								echo "<script>alert('Password update success')</script> ";  
								 header("refresh:0; url=updatepic.php?password-updated_success545344366");
		}
			else
			{
				echo 'not updated';
			}
	}

}
?>