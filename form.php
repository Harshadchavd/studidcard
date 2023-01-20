<?php
	if(isset($_POST['submit']))
	{
		$Clg_Logo=$_POST['clglogo'];
		$Clg_Name=$_POST['clgname'];
		$Phone=$_POST['clgnumber'];
		$sImage=$_POST['StudImage'];
		$sname=$_POST['txtName'];
		$Dob=$_POST['txtBod'];
		$year=$_POST['txtYear'];
		$Address=$_POST['txtAddress'];
		$mobile=$_POST['txtNum'];
 		
		$mysql= new mysqli('localhost', 'root');
		
		$mysql->select_db('stud_details') or die("no database found");
		$mysql->query("insert into clg_table1(Clg_Logo, Clg_Name, Phone_No, Stud_Image, Stud_Name, DOB, Year, Address, Mobile_No)
	
		values('$Clg_Logo', '$Clg_Name', '$Phone','$sImage','$sname','$Dob','$year', '$Address', '$mobile')");

		header('refresh:0;display.php');

	}

?>

<html>
<head>
	<title> Student Detail Form </title>
<style>
		body{background:url(1.jpg);
			background-repeat:no-repeat;
			background-position:top;}
		div{	width:550px;
			height:480px;
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
		<form>
		<input type="submit"  value="||Home||" formaction="home.php" style="background-color:gray; color:black; font-size:20px; font-family:Elephant;"><hr /> 
		</form>
<center>
	<div>
		<center>
		<marquee behavior="scroll" algin="left" scrolldelay="200"> Fill Up This Form And Click On Submit Button.....All Fields Are Required...</marquee>  
		<hr>
		<font color="lightgray"><h1> <b><i><u>Student details form </b></i></u></h1></font>
		<hr />		
		<form action="" method="post">
		<table style="color:white;">
		<tr>
			<td>
				Select College Logo 		
			</td>
			<td>
				:- <input type="file" name="clglogo" style="background-color:black;
					color:white;" required>	
			</td>
		</tr>
		<tr>
			<td>
				Enter College Name 
			</td>
			<td>
				:- <input type="text" name="clgname"  size="30"required>
			</td>
		</tr>	
		<tr>
			<td>
	
				Enter college phone No 
			</td>
			<td>
				:- <input type="text" name="clgnumber" required>
			</td>
			
		</tr>
		<tr>
			<td>
				<br>Select Student's  photo  		
			</td>
			<td>
				<br>
				:- <input type="file" name="StudImage"
					style="background-color:black;
					color:white;" required>
			</td>
		</tr>
				

		<tr>
			<td>
				Enter Your Full Name 		
			</td>
			<td>
				:- <input type="text" name="txtName" size="30"placeholder="Surname First" required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Birth Of Date 	
			</td>
			<td>
				:- <input type="date" name="txtBod"  placeholder="dd/mm/yyyy" required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Year 		
			</td>
			<td>
				:- <input type="text" name="txtYear"  placeholder="Year" required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Address 	
			</td>
			<td>
				:- <textarea cols="15" rows="1" name="txtAddress"  placeholder="Address...." required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Enter Mobile No 		
			</td>
			<td>
				:- <input type="text" name="txtNum" target="10" placeholder="Mobile No..." required>
			</td>
		</tr>
		</table><br>
		<hr>	
		<p> <input type="submit" name="submit" value="submit"
		style="background-color:black;
		color:white;
		font-size:20px">		
		<input type="reset" name="reset"
		style="background-color:black;
		color:white;
		font-size:20px"><hr></p>

	</div>
		</form>

	
	</center>


</body>
</html>
