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
			<form action="file_upload1.php" method="post" enctype="multipart/form-data">

			<h4>Upload Clg Logo (Image) :-<input type="file" name="myfile" style="background-color: black; color: white;"><br><br></h4>
			<h3>Upload Student Image    :-<input type="file" name="myfile1" style="background-color: black; color: white;"><br></h3><hr>
			<input type="submit" name="submit" value="upload" style="background-color: black; color: white; font-size: 25px" >
<hr>
</form>
<?php
    if(isset($_GET["img"]))
    {
        $n=$_GET["img"];
        echo "<img src='upload/".$n."'>";
    }
?>
</body>
</html>