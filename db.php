<?php
$conn = mysqli_connect('localhost','root','','nrirg');  
if(!$conn)
{
	die('Could not connect: '.mysqli_connect_error()); 
}
?>