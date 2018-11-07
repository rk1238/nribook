<html>
<head>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="chatbox">

<form name="ff" method="post" action="send.php">
<textarea cols="50" rows="3" name="chat" required>
</textarea>
<input type="submit" name="send" value="Send">
</form>
</div>


</html>
<?php
//session_start();
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
$chatret="select * from chat ORDER BY id desc";
?>
<div class="jumbotron">	
<?php
if($ms=mysqli_query($conn,$chatret))
	{
		if(mysqli_num_rows($ms) > 0)
		{
			while($ig=mysqli_fetch_assoc($ms))
						{
							$name=$ig['name'];
							$msg=$ig['message'];

?>
<div class="jumbotron container" id="tot">	
<?php if($name!=$iroll){?>
<?php
////////////
$sql="select profilepic,name from nristudent where rollno=\"$name\" ";
	$insival=mysqli_query($conn, $sql);
		
					if(mysqli_num_rows($insival) > 0)
					{
						while($ig=mysqli_fetch_assoc($insival))
						{
							$path=$ig['profilepic'];
							$nname=$ig['name'];
							
						}
					}
					else
					{
						echo 'something went wrong';
					}


///////////
?>
<div class="container ">
<div class="container" id="s"><?php echo"$nname";?>

<div  id="s"><img   src=<?php echo $path;?> height='40' width='40' style='border-radius:50%;border:1px outset;color:#8282ff'></div>

</div>
&nbsp&nbsp&nbsp&nbsp
<div class="container" id="ss"><?php echo wordwrap($msg,15,"<br>\n",TRUE);?></div></div>
<?php 
							}
							else
							{?>

<?php
////////////
$sql="select profilepic,name from nristudent where rollno=\"$iroll\" ";
	$insival=mysqli_query($conn, $sql);
		
					if(mysqli_num_rows($insival) > 0)
					{
						while($ig=mysqli_fetch_assoc($insival))
						{
							$path=$ig['profilepic'];
							$nname=$ig['name'];
							
						}
					}
					else
					{
						echo 'something went wrong';
					}


///////////
?>
<div class="container">
<div class="container" id="self"><?php echo"$nname";?>

<div  id="cont"><img   src=<?php echo $path;?> height='40' width='40' style='border-radius:50%;border:1px outset;color:#8282ff'>


								</div></div>
&nbsp&nbsp&nbsp&nbsp
<div class="container" id="cott"><?php echo wordwrap($msg,15,"<br>\n",TRUE);?></div></div>

							<?php
								}
	?>

</div>


<?php

							
						}
		}
	}

?>
</div>

<style>
#s
{
	height:-20px;
	margin-top:2px;
}
#ss
{

}

#cott
{
	float:left;
	margin-left:70%;
	height:-20px;
	margin-top:-20px;
}
#cont
{
	float:left;
	margin-left:0%;
	height:-20px;
	margin-top:-10px;
}
#self
{
	float:left;
	margin-left:70%;
	height:-20px;
	margin-top:-20px;
}
#s
{
	float:left;
	margin-left:0%;
	height:-20px;
	margin-top:-10px;
}
#tot
{

	height:auto;
	margin-top:10px;
}
.chatbox
{
margin-top:2%; 
float:center;
}
.chatret
{
margin-top:2%; 
float:center;
}
p
{
	color:red;
	font-size:20px;

}
#roll
{
	float:left;
	
}

</style>
