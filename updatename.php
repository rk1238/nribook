<?php
session_start();
$unroll=$_SESSION['us'];
if(isset($_POST['updatename']))
{
	$updatename=$_POST['newname'];
	$passwordforc=$_POST['oldpass'];
	$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
else
	{
	$sql="update nristudent set name=\"$updatename\" where rollno=\"$unroll\" and password=\"$passwordforc\" ";
	if(mysqli_query($conn, $sql))
		{  
								  
								 header(" url=updatepic.php?name_updated-success258y85y485y485");
		}
		else
		{
						echo "<script>alert('name not change')</script> ";  
								 header("refresh:0; url=updatepic.php");
		}
}
}
?>