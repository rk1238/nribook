<?php
include 'db.php';
session_start();

$iroll=$_SESSION['us'];

if($iroll!=null)
{
	
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
<html>
<div class="topnav" id="myTopnav">
<?php
if($iroll==null)
{
	$path="please login";
	$name="please login";
}
?>
<img src="logo.png"  height='30' width='30' class="profilenav">
<p class=rrr><strong><?php echo "NRI BOOK" ?></strong></p>
<a href="timiline.php" class='ho'></a>
<a href="timiline.php" class='home'></a>
  <a href="complaint.php" class='complaint'></a>
  <a href="schat.php" class='chat'></a>
  <a href="logout.php" class='logout'></a>
  
</div>
<style>
.ho
{
	margin-top:-57px;
	background: url(logo.png) no-repeat 0px center;

	margin-left:2%; 
	radius:20px;

}
.profilenav
{
margin-top:12px;
margin-left:2%; 
border-radius:50%;
}
.rrr
{
	color:#ff9933;
	size:50px;
	 font-size: 17px;
	 color: #3333cc;
	  overflow: hidden;
	margin-left:5%; 
	margin-top:-22px;
}

.home
{
	margin-top:-39px;
	background: url(home.png) no-repeat 20px center;
	margin-left:62%; 

}
.complaint
{
margin-top:-39px;	
background: url(complaint.png) no-repeat 8px center;
	margin-left:67%; 

}
.chat
{
margin-top:-39px;
	background: url(chat.png) no-repeat 5px center;
	margin-left:71%; 
}
.logout
{
	margin-top:-39px;
	background: url(logout.png) no-repeat 8px center;
		margin-left:75%; 

}

#myTopnav
{
	background-color:#FFF;
	height:auto;
	width:101%;
	 padding: -22px 19px;
	 top:10px;
	  border: 1px  groove #d2d2d2;
	 float:left;
	 margin-left:-8px;
	 margin-top:-18px;
	 left:0px;
}

.topnav {
	margin:center;
    background-color: #333;
    overflow: hidden;

}
.sticky
{
	 position: fixed;
		top: 10%;
		width: 100%
}
.topnav a {
    float: left;
    color: #6699ff;
    text-align: center;
 padding: 18px 26px;
 text-decoration: none;
    font-size: 17px;
	 border:none;
}
.content {
  padding: 16px;
}
.sticky + .myTopnav {
  padding-top: 112px;
}
.topnav a:hover {
    border:none;
	
}
.topnav a.active {
    background-color: #4CAF50;
    color: red;
}

</style>
<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myTopnav");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  
    header.classList.add("sticky");
  
   
} 
</script>

</html>