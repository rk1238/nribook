<?php
session_start();
include 'db.php';


// here we set  the session 
$kol=$_SESSION['uk'];


if($kol!=null)	// here we use that session
{
	?>
<html>
<head>
<title>Admin </title>
<script>
function student()
{
location.href ="nrireg.php"; 
}
function faculty()
{
location.href ="adreg.php"; 
}

</script>
</head>

<h1><a href="flogout.php">logout</a>

<body><hr>
<h1>Register students and faculty</h1>
<button onclick="student()"> Student</button>
<button onclick="faculty()">Faculty</button><br><br><hr>
<h1>Write Latest Announcment to the students</h1>

<form name="f1" method="post" action="#">
<textarea name="intext" cols="50" rows="05" placeholder="write announcement"  required style="text-align:center">
</textarea>
<input type="submit" name="clganouncement" value="Post">
</form>
<!--here the branch anouncement-->



<!--here the branch anouncement-->
</body><hr>
</html>

<h1>Complaints From students</h1>
<?php

include 'db.php';
$qo="SELECT * FROM acomp ORDER BY id desc ";

$noro=mysqli_query($conn,$qo);
if(mysqli_num_rows($noro)>0)
{
	?>
	<div class="">
<table border='1' cellpadding='2' width='100%'>
<tr><th>Rollno</th><th>Branch</th><th>Year</th><th>Whoom</th><th>Complaint</th><th>Date</th></tr>
	<?php
while($proti=mysqli_fetch_assoc($noro))
{
$vv=$proti['rollno'];
$va=$proti['branch'];
$vb=$proti['year'];
$vc=$proti['whoom'];
$vd=$proti['complaint'];
$ve=$proti['datecomp'];
///?>

<tr><td><?php echo"$vv";?></td><td><?php echo"$va";?></td><td><?php echo"$vb";?></td><td><?php echo"$vc";?></td><td><?php echo"$vd";?></td><td><?php echo"$ve";?></td></tr>


</div>

<?php
}

}

else
	{
	echo'no complaints';
	}

?>
</table>
<?php
}
else
{
	header("Location: facultylog.php?logedin");
}
?>






<!--this is for the announcemnt-->
<?php

if(isset($_POST['clganouncement']))
{
	announcement();

}?>
<?php
function announcement()
{
	include 'db.php';

$text=$_POST['intext'];

$qr="insert into notify(notify)values('$text')";

$ex=mysqli_query($conn,$qr);
if($ex)
	{
		echo'notification submitted';
	}
	else
	{
	echo'something went wrong';

	}
}
?>

