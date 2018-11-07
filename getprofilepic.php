<?php
session_start();
$iroll=$_SESSION['us'];
$image=basename($_FILES['fileToUpload']['name']);
$image=str_replace(' ','|',$image);

$tmppath="photo/".$image;

   if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$tmppath))
{
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
else
	{
if($iroll!=null)
		{
	$sql="UPDATE nristudent SET profilepic=\"$tmppath\" where rollno=\"$iroll\" ";
	if(mysqli_query($conn, $sql))
		{  
								echo "<script>alert('Profile picture updated success')</script> ";  
								 header("refresh:0; url=updatepic.php");
			}
			else
			{
				echo 'not updated';
			}
		}
	}
}
else
{
	echo "<script>alert('Please Select Image')</script> ";  
								 header("refresh:0; url=updatepic.php");
}
?>