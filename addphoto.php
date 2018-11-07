<html>
<head>

</head>
<body>
<div class="topnav" id="myTopnav">
  <a class="active" href="welcom.php"><strong>Home</strong></a>
  <a href="updatepic.php"><strong>UpdateProfile</strong></a>
 <a href="timiline.php"><strong>Timeline</strong></a>
  <a href="complaint.php"><strong>Complaint</strong></a>
  <a href="addphoto.php"><strong>Add photo</strong></a>
  <a href="logout.php"><strong>logout</strong></a>
</div>
<div class="im">
<form  method="post"  action="getphoto.php" enctype="multipart/form-data">
<input type="hidden" value="10000000"  name="MAX_FILE_SIZE">
<input type="file"  name="fileToUpload" style="cursor:pointer;">
<input type="submit"  name="submit" value="submit" style="cursor:pointer;">
</form>
</div>
</body>

<style>

#myTopnav
{
	background-color:transparent;
}
.topnav {
	margin:left;
    background-color: #333;
    overflow: hidden;
}
.topnav a {
    float: left;
    color: #6699ff;
    text-align: center;
 padding: 14px 26px;
 text-decoration: none;
    font-size: 17px;
}
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
.im
{
	
	margin-left:350px;
	margin-top:240px;
}
body
{
	background-color:#efefef;
}

</style>
</html>



