<!DOCTYPE html>
<html>
	<head>
		<title>Iamge Upload Page </title>
		
		<style>
		body{background:url(9.jpg);
			background-repeat:no-repeat;
			background-position:top center;}
		div{	width:500px;
			height:250px;
			padding:25px;
			border:solid 3px;
			color: white;
			text-align:justify;
			border-radius:30px;	
			background-image: url(aboutus1.jpg);
		   }
		</style>
	</head>
<body>
	<center>
		<div><center><hr>
			<h1><u>Select Image For Upload </u></h1>
			<hr>
			<form action="file_upload.php" method="post">
		<h4>Upload Clg Logo (Image) :-<input type="file" name="myfile" required style="background-color: black; color: white"></h4>
		<h3>Upload Student Image    :-<input type="file" name="myfile1" required style="background-color: black; color: white"></h3>
		<hr>
		<input type="submit" name="Submit" value="Upload" style="background-color: black; 
		color: white; font-size: 20px"></form>
		<?php
    if(isset($_GET["img"]))
    {
        $n=$_GET["img"];
        echo "<img src='upload/".$n."'>"'
	}
?>
    



		<hr>
		</div>
</body>
</html>
	