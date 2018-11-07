<?php 
//session_start();
?>
<html>
<head>
<title>Complaint</title>

<script type="text/javascript">  
function checkfields(){  
var selectedwhoom=document.f.who.value;  
var selectedyear=document.f.ayear.value;  

  var ok="-1";
if(selectedwhoom==ok){  
	alert("Please Select Complaint Taker");  
return false;  
}  
if(selectedyear==ok){  
	alert("Please Select Acadamic Year");  
return false;  
}  
else{  
return true;  
}  
}  
</script>  

<?php include("menu.php"); ?>  

</head>






<form name="f" method="post" action="#" onsubmit="return checkfields()">
<body >
<table>
<center><h1><b><u>COMPLAINT</u></u></B></h1></center>

<center><select name="who" style="cursor:pointer;">
<option value="-1" selected>For whoom</option>
<option value="chairman">Chairman</option>
<option value="principal">Principal</option>
<option value="hod">Hod</option>
</select></td></tr>



<select name="ayear" style="cursor:pointer;">
<option value="-1" selected>Acadamic Year</option>
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
</select></td></tr>


<center><strong class="cm">Complaint:</strong>
<textarea rows="14" cols="50" autofocus name="complaint" placeholder="Write Complaint Here" class="ta" required>
</textarea>
</td></tr>

<center><input type="submit" value="Submit"  name="submit" style="cursor:pointer;">
</body>
</form>

<span id="comres"></span>
<style type="text/css">

body
{
	background-color:#efefef;
}
#id
{
color:red;
}
</style>

</html>

<?php
include 'db.php';
$croll=$_SESSION['us'];
if(isset($_POST['submit']))
{
	$date =date_default_timezone_set('Asia/Kolkata');
	$today=date("F j, Y  g:i a ");
	//// getting values from the  complain box
	$cyear=$_POST['ayear'];
	$cwhoom=$_POST['who'];
	$ccomplaint=$_POST['complaint'];
	
if(($cyear!=null)&&($cwhoom!=null)&&($ccomplaint!=null))
		{
					//// query fr inserting that above values
					$sql1="select  branch from insertstudent where rollno=\"$croll\" ";
					$insival=mysqli_query($conn, $sql1);
		
					if(mysqli_num_rows($insival) > 0)
					{
						while($ig=mysqli_fetch_assoc($insival))
						{
							$combranch=$ig['branch'];
		
							
						}
					}




								$sql="INSERT INTO acomp(rollno,branch,year,whoom,complaint,datecomp)VALUES('$croll','$combranch','$cyear','$cwhoom','$ccomplaint','$today')";
								

									if($kor=mysqli_query($conn,$sql))
									{  
										?>
										<script>
											document.getElementById('comres').innerText="complaint submitted";
											header("url=complaint.php");
											</script>
										
										<?php
											
									}
									else
									{
									echo 'complaint not submit';
							
									}
							
		}
						
}
else
{
header("url=complaint.php");
}

?>