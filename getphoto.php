<?php
session_start();
$iroll=$_SESSION['us'];
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}

	$sql5="SELECT * FROM nristudent where rollno=\"$iroll\" ";
							$insivaname=mysqli_query($conn, $sql5);
		
					if(mysqli_num_rows($insivaname) > 0)
					{
						while($iggname=mysqli_fetch_assoc($insivaname))
						{
							$profilename=$iggname['name'];
						}
					}
					else
					{
						echo'somethig wrong!';
					}



$enterpost=$_POST['enterpost'];
$date =date_default_timezone_set('Asia/Kolkata');
$today=date(" F j, Y  g:i a ");
$like=0;
$unlike=0;
$image=$_FILES['fileToUpload']['name'];
if($image!=null)
{
$imagetype=$_FILES['fileToUpload']['type'];
$fileext=explode('.', $image);
$fileactualext=strtolower(end($fileext));
$allowed = array('jpg',  'jpeg',  'png', 'pdf');
	$filenamenew=uniqid('',true).".".$fileactualext;
	$filedest='photo/'.$filenamenew;

   if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$filedest))
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
	$sql="INSERT INTO uploadimg(rollno,path,uploaddate,enterpost,name) VALUES('$iroll','$filedest','$today','$enterpost','$profilename')";
	if(mysqli_query($conn,$sql))
	{  
		 
								 header("refresh:0; url=timiline.php");
	}
	else
	{
		echo "image not uploaded".$tmppath;  
		echo "image not uploaded".$iroll;
	}
		}
		else
		{
			echo 'Login first';
		}
}
		
	}
	else
	{
		echo'alert("not uploaded")';
	}
}


/// if image = null itey
	else
	{
if($enterpost!=null)
		{

$sqll="INSERT INTO uploadimg(rollno,uploaddate,enterpost,name) VALUES('$iroll','$today','$enterpost','$profilename')";
	if(mysqli_query($conn,$sqll))
	{  
		 echo "<script>alert('status uploaded success')</script> ";  
								 header("refresh:0; url=timiline.php");
	}
	else
	{
		echo "status not uploaded";
	
	}
		}
		else
		{
echo "<script>alert('please select something')</script> ";  
								 header("refresh:0; url=timiline.php");
		}
	}
?>