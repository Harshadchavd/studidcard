<?php
	  
	  $conn = mysqli_connect("localhost","root","","stud_details") or die ("Connection Failed");
	  $sql = "SELECT * FROM stud_table";
	  $result = mysqli_query($conn,$sql) or die("Query Failed");

    
 		
	while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
		echo "Database stud_details selected successfully\n";
		$conn->query("select * from stud_table");
		{
?>
	
	
<html>
	<head>
		<style>
		body{
				background-image:url(2.jpg);
				background-repeat:no-repeat;
				background-position:top center;
			}
		div{	
				width:300px;
				height:auto;
				padding:25px;
				border:solid 5px;
				border-color:black;
				text-align:justify;
				border-radius:25px;
				background-image:url(idcard4.jpg);
				background-repeat:no-repeat;
				background-position:top center;
		   }
		</style>
	</head>
<body>
<center>
	<div id="dv">
	<font color="black"><center>
			<h3>B H Gardi Engineering & Technology </h3>
		<p align="center"><img src="bh_logo.png" height="50px" width="50px"> </p>
		<h5>Phone No : 02833-234678</h5>
	<hr>
		<img src="home.jpg" height="200" width="200">
	<hr></center>
	<table>
	
		<tr>
			<td>
			 	Name  :- <?php 
								$conn->query("select * from stud_table");
								while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
								{
									?>
								<td><?php echo $row['Stud_Name'];?></td>
								<?php } ?>
			</td>
			<td>
			 	
			</td>
		</tr>
		<tr>
			<td>
			 	D.O.B :-
			</td>
			<td>
			 	
			</td>
		</tr>
		<tr>
			<td>
			 	Year :-
			</td>
			<td>
				 
			</td>
		</tr>
		<tr>
			<td>
			 	Address :-
			</td>
			<td>
				
			</td>
		</tr>
		
		<tr>
			<td>
			 	Mobile  :-
			</td>
			<td>
			 	
			</td>
		</tr>
	
	
		</table>
		<p align="right"><b><u>Director's Signature...</u></b></p>
</font>
		<i><p align="right">Director</p></i> 	 
	</div>
	<form>
			<h1 align="center">
	<input type="button" id="btn1" value="MCA" style="background-color:light blue; color:red; font-size:20px; font-family:Elephant;">
	<input type="button" id="btn9" value="Nursing" style="background-color:light blue; color:red; font-size:20px; font-family:Elephant;">
	<input type="button" id="btn4" value="Mcs" style="background-color:light blue; color:red; font-size:20px; font-family:Elephant;">
	<input type="button" id="btn7" value="BHMS" style="background-color:light blue; color:red; font-size:20px; font-family:Elephant;">
	
	<!--<input type="button" id="btn2" value="image2">
	<input type="button" id="btn3" value="image3">	
	<input type="button" id="btn5" value="image5"><br>
	<input type="button" id="btn6" value="image6">
	<input type="button" id="btn8" value="image8">
	<input type="button" id="btn10" value="image10">-->

	


	<script type="text/javascript" src="backcolors.js">
</script>	
	</form>
		<?php } ?>

</body>
</html>
