<html>
<head>
<title>Nri Book</title>
</head>
<center><h2 style="font-size:120px;">NRI  BOOK</h2></center>

<body background="black-picture10.jpg">


    <form id="form_login"  method="post" action="getlogin.php">
	<h1>LogIn To Your Account</h1>
        <p><input type="text" name="username" placeholder="RollNo"  required> </p>
        <p>  <input type="password" name="password" placeholder="Password" required ></p>
     
        <p > <input type="submit" style="cursor:pointer;color:#33ccff;"  id="sub" value="Login"> </p>


    </form>


 <form id="form_reg"  method="post" action="checkandreg.php">
	<h1>Register Here</h1>
        <p><input type="text" name="rollno" placeholder="RollNo"  required> </p>
		<p><input type="text" name="name" placeholder="Name"  required> </p>
        <p>  <input type="password" name="pass" placeholder="Password" required ></p>
		  <p>  <input type="password" name="conpass" placeholder="Connform Password" required ></p>
     
        <p > <input type="submit" style="cursor:pointer;color:#33ccff;"  id="sub" value="Register"> </p>


    </form>


</body>

<style type="text/css">
h1
{
margin-left:10;
margin-top:120;
font-size:30px;
color:#33ccff;
}
input[type=text] {
    padding: 0;
    height: 30px;
	width:220px;
    position: relative;
    left: 0;
	 color:white;
    outline: 1px;
    background:transparent;
    font-size: 15px;
}

input[type=password] {
    padding: 0;
    height: 30px;
	width:220px;
    position: relative;
    left: 0;
    outline: 10px;
     color:white;
	  outline: 1px;
    background:transparent;
    font-size: 15px;
}

button
{
height:30px;
width:90px;
background-color:#15a29e;
}
#form_reg {
 margin-left: 2%;
  margin-top: 1%;
 position: absolute;
  left: 3%;
  top: 10%;
 color:white;
  background-color:transparent;
   display: table-cell;
   text-align: center;
  
}

#form_login {
 margin-left: 7%;
  margin-top: 2%;
 position: absolute;
  left: 63%;
  top: 10%;
 color:white;
 
  background-color:transparent;
   display: table-cell;
   text-align: center;
  
}


#sub
{
background:transparent;
size:30px;
height:30px;
width:90px;
text-size:20px;
}


</style>
</html>