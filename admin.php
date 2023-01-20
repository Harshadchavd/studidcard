<!DOCTYPE html>
<html>
	<head>
		<title>Login Form Page </title>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="pcode.js"></script>
		<style>
		body{background:url(student.jpg);
			background-repeat:no-repeat;
			background-position:top center;}
		div{	width:500px;
			height:300px;
			padding:25px;
			border:solid 3px;
			text-align:justify;
			border-radius:30px;	
			background-color:gray;
		   }
		</style>
	</head>
<body>
<center><font color="white">
<h3> Enter Correct Username Or Password.. Otherwise U can't Login.. </h3>
</font>
<b000r>

	<div>

 <font color="black">
<center>
	<img src="logo.png" border="1" height="60px" width="60px">
</center><hr>
	<h2> Login Here.......	
 </h2>
</font>

<hr/>
	<form action="" method="POST">
	<p><b>Enter Username :- <td><input type="text" name="txtUser" placeholder="Username"><br></p>
	<p>Enter Password :- <input type="password" name="Pass" id="pass" placeholder="Password">
	<input type="button" id="btn" value="hide/show"
	style="background-color:black;
	color:white;"></b></p>
<hr>
	<p><input type="submit" value="Login"
	style="background-color:black;
	color:white;
	font-size:20px">		
	<input type="reset" value="reset"
	style="background-color:black;
	color:white;
	font-size:20px"></p> 
<hr/>
</form>
 
	</div>
<font color="white" type="Gill Sans" size="20">
</body>
</html>
<?php

	$uid = $_POST['txtUser'];
	
	$pw = $_POST['Pass'];

	if($uid == "admin" && $pw == "admin1234")
	{	

		
		header("location:home.php");
	}
	else
	{
		echo "Invalid Username or Password";
		//header("location:invalid.html");
	}	
?>