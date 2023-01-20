<?php
	@mysql_connect('localhost','root');
	mysql_select_db('stud_details');
	$no = $_GET['update'];
	$que=mysql_query("select * from clg_table1 where No ='$no'");
	
	while($r=mysql_fetch_array($que))
	{

	
?>
<html>
<head>
	<title> Student Form Update Details </title>
<style>
		body{background:url(1.jpg);
			background-repeat:no-repeat;
			background-position:top;}
		div{	width:550px;
			height:450px;
			padding:25px;
			border:solid 3px;
			text-align:justify;
			border-radius:20px;	
			background:url(home.jpg);
		   }
		</style>
</head>
	<body>
	<font color="white">
<center>
	<div>
		<center> 
			<marquee behavior="scroll" algin="left" scrolldelay="200"> Fill Up This Form And Click On Submit Button.....All Fields Are Required...</marquee>  
		<hr>
		<h1> <b><i><u>Student details form </b></i></u></h1>
		<hr />		
		<form action="change.php" method="post">
		<table style="color:white;">
		<tr>
			<td>
				College Logo 		
			</td>
			<td>
				:- <input type="file" name="clglogo" style="background-color:black;
					color:white;" required>
			</td>
		</tr>
		<tr>
			<td>
				Enter school/college Name 
			</td>
			<td>
				:- <input type="text" name="clgname"  size="30" value="<?php echo $r[Clg_Name]; ?>"required>
			</td>
		</tr>	
		<tr>
			<td>
	
				Enter college phone No 
			</td>
			<td>
				:- <input type="text" name="clgnumber" value="<?php echo $r[Phone_No]; ?>"required>
			</td>
			
		</tr>
		
		<tr>
			<td>
				<br>Select Student's  photo  		
			</td>
			<td>
				<br>:- <input type="file" name="logo" style="background-color:black;
					color:white;" required>
			</td>
		</tr>
				

		<tr>
			<td>
				Enter Your Full Name 		
			</td>
			<td>
				:- <input type="text" name="txtName" placeholder="Surname First" value="<?php echo $r[Stud_Name]; ?>" required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Birth Of Date 	
			</td>
			<td>
				:- <input type="date" name="txtBod"  placeholder="dd/mm/yyyy" value="<?php echo $r[DOB]; ?>"required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Year 		
			</td>
			<td>
				:- <input type="text" name="txtYear"  placeholder="Year" value="<?php echo $r[Year]; ?>"required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Address 	
			</td>
			<td>
				:- <input type="text" cols="15" rows="1" name="txtAddress"  placeholder="Address...." value="<?php echo $r[Address]; ?>"required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Mobile No 		
			</td>
			<td>
				:- <input type="text" name="txtNum" placeholder="Mobile No..." value="<?php echo $r[Mobile_No]; ?>"required>
			</td>
		</tr>
		</table><br>
		<hr>	
		<p> <input type="Submit" name="submit" value="Update"
		style="background-color:black;
		color:white;
		font-size:20px">		
		<input type="reset" name="reset"
		style="background-color:black;
		color:white;
		font-size:20px"><hr></p>
	</div>
		</form>
		<?php } ?>	
	</center>
</body>
</html>
