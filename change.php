<?php 

	if(isset($_POST['submit']))
	{
		$Clg_Logo=$_POST['clglogo'];
		$Clg_Name=$_POST['clgname'];
		$Phone=$_POST['clgnumber'];
		$Logo = $_POST['logo'];
		$Name = $_POST['txtName'];
		$Dob = $_POST['txtBod'];
		$year = $_POST['txtYear'];
		$address = $_POST['txtAddress'];
		$mobile = $_POST['txtNum'];
		
		@mysql_connect('localhost','root');
		mysql_select_db("stud_details");
		mysql_query("update clg_table1 set Clg_Logo='$Clg_Logo',
					Clg_Name='$Clg_Name',
					Phone_No='$Phone',
					Stud_Name='$Name',
					Stud_Image ='$Logo',
					DOB = '$Dob',
					Year = '$year',
					Address = '$address',
					Mobile_No = '$mobile'
					where Stud_Name='$Name'");
			header("refresh:0;display.php");
		
	}

?>