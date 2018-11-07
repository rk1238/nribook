<?php
////
session_start();
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
	
	if(isset($_POST['send']))
	{
		$ms=$_POST['chat'];
		$msg=wordwrap($ms,10,"\n");

	$croll=$_SESSION['us'];

	$sos="select * from insertstudent where rollno='$croll'";
	$ok=mysqli_query($conn,$sos);
		if(mysqli_num_rows($ok)>0)
		{
		while($ig=mysqli_fetch_assoc($ok))
						{
							$branch=$ig['branch'];
						}
		}
		
	
			$chatqu="insert into branchchat(name,message,branch)values('$croll','$msg','$branch')";
	

							if(mysqli_query($conn,$chatqu))
							{  
								 header("refresh:0; url=schat.php");
								 
							}
							else
							{
								echo'not send';
							}
	}
	else
		{
		}


?>
