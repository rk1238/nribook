<?php

function getanounce()
{
	include 'db.php';
		$qo="SELECT * FROM notify where id=(select max(id) from notify)";
		$va;
		$noro=mysqli_query($conn,$qo);
			if(mysqli_num_rows($noro)>0)
			{
			$proti=mysqli_fetch_assoc($noro);
			$va=$proti['notify'];

			}
			return $va;
}
////////////////here the code for that

function selfprofile($iroll)
{
	$iroll;

	include 'db.php';
	$ig;
	$sql="select profilepic,name from nristudent where rollno=\"$iroll\" ";
	$insival=mysqli_query($conn, $sql);
		
		//////////////////////////
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