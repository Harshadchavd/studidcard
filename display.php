<?php
		$conn = mysqli_connect("localhost","root","","stud_details") or die ("Connection Failed");
	  $sql = "SELECT * FROM stud_table";
	  $result = mysqli_query($conn,$sql) or die("Query Failed");
	
	@$no = $_GET['delete'];
 
	 $conn->query("delete from stud_table where No = '$no'");

?>
<html>
<head>
	<title> MCA Student Data Display...</title>
</head>
<body bgcolor="gray">
<center>
<font color="black "><h1><u><b>MCA Student Data</b></u></h1></font></center>


<hr>
		<form>
		<input type="submit"  value="||Back||" formaction="display_stream.php" style="background-color:black; color:white; font-size:20px; font-family:Elephant;">
		<input type="submit"  value="||Home||" formaction="home.php" style="background-color:black; color:white; font-size:20px; font-family:Elephant;">
		<hr /> 
		</form>
		
<center>
<form action="search.php" method="post">
	<b>SEARCH : <input type="text" name = "search" size="40" placeholder="Student Name Search Here......"></b>

	<input type="submit" name="submit" value="Search" size="40"  style="background-color:black; color:white;">
</form>
<hr>
<table border='1' style="background-color:black; color:white;" cellpadding='10' align='center'>
<tr style="background-color:lightgray; color:black;">
	<th>No</th><th>Clg_Logo</th><th>Clg_Name</th><th>Clg_ContactNo</th><th>Stud_Image</th><th>Stud_Name</th><th>DOB</th><th>Year</th><th>Address</th><th>Mobile_ No</th><th>Actions</th>
</tr>
<?php
$conn->query("select * from stud_table");
while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
{	
?>
<tr>
	<td><?php echo $row['No'];?></td> <td> <img src="upload/<?php echo $row['Clg_Logo'];?>" height="60" width="90"> </td> <td><?php echo $row['Clg_Name']; ?></td>
	<td><?php echo $row['Phone_No']; ?></td><td><img src="upload/<?php echo $row['Stud_Image'];?>" height="60" width="90"></td><td><?php echo $row['Stud_Name'];?></td><td><?php echo $row['DOB'];?></td><td><?php echo $row['Year'];?></td><td><?php echo $row['Address'];?></td><td><?php echo $row['Mobile_No'];?></td>
	<td>
		<a href="edit.php?update=<?php echo $row['No']; ?>"> EDIT </a>||
		<a href="display.php?delete=<?php echo $row['No']; ?>">DELETE</a>||
		<a href="print.php?print=<?php echo $row['No']; ?>">PRINT</a>
	</td>
</tr>

	<?php } ?>
</table>
	<h1><center><a href="mca_form.php">Add More Records....</a></h1>
</body>
</html>
