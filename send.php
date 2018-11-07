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

	
			$chatqu="insert into chat(name,message)values('$croll','$msg')";
	

							if(mysqli_query($conn,$chatqu))
							{  
								 header("refresh:0; url=schat.php");
								 
							}
							else
							{
								echo'not send';
							}
	}

?>
