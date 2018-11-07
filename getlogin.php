<?php
session_start();
$conn=mysqli_connect('localhost','root','','nrirg');
if(!$conn)
{
	echo 'not connected ';
}
$date =date_default_timezone_set('Asia/Kolkata');
$today=date(" F j, Y  g:i a ");

$usname=$_POST['username'];
$uspass=$_POST['password'];
$sql1="INSERT INTO userlog(username,date)values('$usname','$today')";
$retval=mysqli_query($conn, $sql1); 

$_SESSION['us']=$usname;
$sql = "SELECT * FROM  nristudent WHERE rollno='$usname' and password='$uspass'"; 

$retval=mysqli_query($conn, $sql);  
$nog=mysqli_num_rows($retval);
if($_SESSION['us']!=null)
{
if($nog > 0)
{
	header("Location: timiline.php?logedin");
}
else
{
	header("Location: home.php");
}
}
else
{
	echo'login first';
}
mysqli_close($conn);
?>