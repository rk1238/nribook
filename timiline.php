<!DOCTYPE html>    
<html lang="en">    
<head>
<title>Home</title>
<link rel="stylesheet"  type="text/css" href="timeline.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
?>
<div class="jumbotron">
<?php include("menu.php");
?></div>
<?php
require 'db.php';  
include 'timilinemethods.php';
$k=strtoupper($iroll);
?>

<!---this is Start of self profile---->

<div class="container rk">

<div class="panel panel-primary">  

  <div class="panel-head sel">  
<img   src=<?php echo $path;?> class="img-circle"  height='60' width='60'>  
<div class="rol"><?php echo $name;?></div>&emsp;

<div class="na"><?php echo ''.$k ;?></div>
</div> 

  <div class="panel-footer">  
<a href="updatepic.php">Edit</a>
 </div>  
</div>
</div>




<!---this is close of self profile  kkkkk---->
<!---this is postbox---->

<div class="container postbox">

<div class="panel panel-primary">  

  <div class="panel-head">  
<div class="well well-sm">
<img   src=<?php echo $path;?>  class="img-circle"  height='30' width='30'>  

Whats on your Mind</div>  


  <div class="panel-footer">  
<form  method="post"  action="getphoto.php" enctype="multipart/form-data">
<textarea rows="2" cols="40" autofocus name="enterpost" placeholder="Write Something Here" style="text-align:center">
</textarea>


<input type="hidden" value="10000000"  name="MAX_FILE_SIZE">
<img src="save.png" alt="Save icon" /><input type="file"  name="fileToUpload"  style="cursor:pointer;" ><br>
<input type="submit"  name="submit" value="Post" class="post">
</form>
 </div>  
</div>
</div>  
</div>

<!---this is for postbox---->


<!---this is for announcements---->
<div class="container annonce">

<div class="panel panel-primary">  

 <div class="panel-footer">  

<marquee direction="left" truespeed="10" scrolldelay="150">
<?php echo $anonce=getanounce();?></marquee>
</div>
</div>
</div></div>

<style>
.annonce
{
	width:30%;
	margin-top:-8%;
margin-left:890px;
position: fixed;
}
</style>
<!---this is for announcements---->

<br>




</body>



<?php
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
					if($path!=null)///////this isis for pics
							{
					?>
					
<!----------
this is for the images and astatussses
---------------->
<div class="container stcont">

<div class="panel panel-primary">  

  <div class="panel-head phi">  
<img src='<?php echo $profilepath;?>' class="img-circle stimg"  height='60' width='60' alt='wait'>	
				
<div class="stname"><?php echo $prname;?></div>
<div class="stdate"><?php echo $udate;?></div>

	</div>	
	<div class="panel-body">  
    <img src=<?php echo $path;?> class="img-thumbnail iw" height='550' width='812' alt='image not found' >
  </div>  

				

	<div class="well well-lg we"> 
	<?php echo $matter;?></div>
	</div>

	</div>
		<br>


			
						
						

							
							<?php
							}//this is for pics

							else//this is for statusses
							{
								?>
<div class="container  co">

<div class="panel panel-primary">  

  <div class="panel-head phm">  
									
	<img src='<?php echo $profilepath;?>' class="img-circle stimg"  height='60' width='60' alt='wait'>	

	<div class="ostname"><?php echo $prname;?></div>
	<div class="ostdate"><?php echo $udate;?></div>
	</div>
<div class="container jmat">

<div class="well well-lg"><?php echo wordwrap($matter,20,"<br>\n",TRUE);?>
</div></div>

</div>
</div>


						
												<?php
							}//////this is end of statusses
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
		//header("url=home.php");
	}
					


////for login agian

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
<style>
	
	
.notify
{
	
	 height:30px;
	 width:270px;
	float: left;
	position: fixed;
    top: 250px;
     left: 890px;
	font-size: 20px;
	vertical-align: middle;
  margin-bottom: 1.75em;
  background-color:;
  
  
}
	</style>
	<style>
.na
{
margin-top:-20px;
margin-left:70px;
}
.rk
{
width:30%;
margin-top:40px;
margin-left:890px;
position: fixed;
border:none;
}
.postbox
{
	width:50%;
	margin-left:15%;
}

.sel
{
	height:40%;
}
.rol
{
margin-top:-55px;
margin-left:70px;
}

.stimg
{
margin-top:15%:
}
.phm
{
margin-top:8%;
}
.jmat
{
margin-top:4%;
width:100%;
height:auto;
}
.co
{
width:50%;
margin-left:15%;
}
.ostname
{
margin-top:-11%;
margin-left:12%;
}
.ostdate
{
margin-top:0%;
margin-left:12%;
}
.iw
{
width:120%;
}
.we
{
margin-top:-2%
width:50%;
}
.phi
{
margin-top:8%;
}
.stimg
{
margin-top:-10%;
}
.stcont
{
width:50%;
margin-left:15%;
}
.stname
{
margin-top:-11%;
margin-left:11%;
}
.stdate
{
	margin-top:1%;
margin-left:11%;
}													
.post
{
	cursor:pointer;
	color:white;
	background-color:#00008b;
	border:none;
	height:15%;
	width:13%;
	float:center;
left:10px;
top:9px;
padding: 10px 0px 23px 8px;
border-width:1px;
border-radius:5px;
margin-left:86%; 
margin-top:-14%; 
text-align:center;
font-size:18px;

}
	</style>
</html>