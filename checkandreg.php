<?php
session_start();
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
$crollno=$_POST["rollno"];
$cname=$_POST["name"];
$xpass=$_POST["pass"];
$cpass=$_POST["conpass"];
$propic='photo/nobody_m.original.jpg';
$_SESSION['us']=$crollno;
if($xpass==$cpass)
{
$sql = "SELECT * FROM  insertstudent WHERE rollno='$crollno'"; 
$retval=mysqli_query($conn, $sql);  
$nog=mysqli_num_rows($retval);
if($nog > 0)
{
	$sql1="SELECT * FROM nristudent WHERE rollno='$crollno'";
	$insival=mysqli_query($conn, $sql1);

					if(mysqli_num_rows($insival) > 0)
					{
							echo 'User Already Registered<br/>';

					}
					else
					{
						$sql2="INSERT INTO nristudent(rollno,name,password,profilepic)VALUES('$crollno','$cname','$cpass','$propic')";
						if(mysqli_query($conn,$sql2))
							{  
							header("Location: timiline.php?logedin");
								 echo "Registered completed successfully";  
							}
							else
							{
								 echo "Not Register ";  
							}
					}

}
else
{
echo 'Data Not Found<br/>';
}

}
else
{
	echo '<script>alert("Password Does Not Match");</script>';
}



?>