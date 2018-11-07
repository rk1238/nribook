<html>
<html lang="en">  
 <head>  
   <title>Bootstrap image</title>  
<link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
 <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>  

<?php
session_start();
$iroll=$_SESSION['us'];
$k=strtoupper($iroll);

$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
else
{
	$iroll=$_SESSION['us'];
	$sql="select profilepic,name from nristudent where rollno=\"$iroll\" ";
	$insival=mysqli_query($conn, $sql);
		
					if(mysqli_num_rows($insival) > 0)
					{
						while($ig=mysqli_fetch_assoc($insival))
						{
							$path=$ig['profilepic'];
							$name=$ig['name'];
							
						}
					}
}
?>
<div class='wid'>
<div class='prooof'>
<img   src=<?php echo $path;?>  height='60' width='60'  style='border-radius:50%;border:1px outset;color:#8282ff'></div>
<div class="text1"><strong><?php echo $k;?></strong>&emsp;<a href="updatepic.php" style='color:#400040;'>Edit</a></div>
<div class="text2"><strong><?php echo $name ;?></strong></div>
<hr>
</div>


<html>
<head>
<link rel='stylesheet' type='text/css' href='timeline.css'>
</head>
<body>
<?php include("menu.php"); ?>  
<tr><td><br><br><br><br><br><br></td></tr>



<div class=tittletext>
<p class=titlete>Whats on your mind?</p>
</div>
<div class=sttext>
<div class="imdwid"><img   src=<?php echo $path;?>  height='40' width='40'  style='border-radius:50%;border:1px outset;color:#8282ff''></div>

<form  method="post"  action="getphoto.php" enctype="multipart/form-data">
<textarea rows="2" cols="40" autofocus name="enterpost" placeholder="Write Something Here" class="tded" style="text-align:center">
</textarea>
<div class geetha><hr></div>
<div class="imup">

<input type="hidden" value="10000000"  name="MAX_FILE_SIZE">
<label class="upload"><img src="save.png" alt="Save icon" /><input type="file"  name="fileToUpload"  style="cursor:pointer;" ></label><br>
<input type="submit"  name="submit" value="Post" class="post">
</form>
</div>
</div>
<div class=sp>
</div>



</body>



<?php

$conn=mysqli_connect('localhost','root','','nrirg');
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
else
{
	if($iroll!=null)
	{
	$sql1="SELECT * FROM uploadimg ORDER BY id desc";
	$insival=mysqli_query($conn, $sql1);
		
					if(mysqli_num_rows($insival) > 0)
					{
						while($ig=mysqli_fetch_assoc($insival))
						{
							$path=$ig['path'];
							$roll=$ig['rollno'];
							$udate=$ig['uploaddate'];
							$matter=$ig['enterpost'];
							$profilenamefor=$ig['name'];
							$sql2="SELECT * FROM nristudent where rollno=\"$roll\" ";
							$insiva=mysqli_query($conn, $sql2);
		
					if(mysqli_num_rows($insiva) > 0)
					{
						while($igg=mysqli_fetch_assoc($insiva))
						{
							$profilepath=$igg['profilepic'];
							$prname=$igg['name'];
						}
					}
					if($path!=null)
							{
					?>
						

<table colspan='100%'><div class=all><div class="container">
<br>
					<div class=proed><img src='<?php echo $profilepath;?>' height='50' width='50'  style='border-radius:50%;border:1px outset;color:#8282ff'' alt='wait'>	</div>
				
				<div class=adateed>	<strong><b><?php echo $prname;?></b><p class=dateedit> <?php echo $udate;?></p></strong></div>
				
<div class="container">  
  <h2>Rounded Corners</h2>           
  <img src=<?php echo $path;?> class="img-rounded" alt="abc" width="300" height="250">   
</div>  



				


			<pre><div class=lion><strong></p><p><?php echo $matter;?></p></strong></div></pre>

			
						
						
					
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td></tr></table>
							
							<?php
							}//not null
							else
							{
								?>
									<table colspan='100%'>
<br>
<div class=bormat>
					<tr><td><div class=pro><img src='<?php echo $profilepath;?>' height='50' width='50'  style='border-radius:50%;border:1px outset;color:#8282ff'' alt='wait'>	</div>

					<div class=adate><strong><b><?php echo $prname;?></b><p class=dateedi> <?php echo $udate;?></p></strong></div>
				
				
				
			<div class=enterpos><strong><textarea readonly  class=tt
	style="font-size:16px; overflow:auto"><?php echo $matter;?></textarea></strong></div>	<br><br>
						</div>
						</td></tr></table></div>
						<?php
							}
						}
						?>
						
							<br><br><br>
								

<?php
					}
					else
	{
						echo'<center ><p bgcolor="red">no photos are posted</p></center>';
	}
	}
	else
	{
		echo 'login first';
	}
}
/////////////
?>
<style type="text/css">
.adate
{

float: right;
 margin-top:3px;
  margin-right:48%;
    top: 230px;
	color:black;;
	font-size:20px;
}
.enterpos
{
	float: left;
  margin-left:22%;
  margin-top:3%;
   background-color:black;
	
}
.dateedi
{
	color:#c0c0c0;
	font-size:16px;
	margin-top:-2px;
}
.tittletext
{
	height:5%;
	 width:44%;
	margin-left:200px; 
	margin-top:-79px;
background-color:#FFF;
	 border: 1px  groove #d2d2d2;

}
.sp
{
	height:-20px;
}
</style>
</html>