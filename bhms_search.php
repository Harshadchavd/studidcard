<?php
if(isset($_POST['submit']))
{
	$search = $_POST['search'];
		
		$conn = mysqli_connect("localhost","root","","stud_details") or die ("Connection Failed");
		$sql = "SELECT * FROM bhms_table";
		$result = mysqli_query($conn,$sql) or die("Query Failed");


	
}
?>
<html>
<head>
	<title>Search Record</title>
</head>
<body bgcolor="gray">
<center><hr>
<form action="bhms_search.php" method="post">
	<b>SEARCH : <input type="text" name = "search" size="40" placeholder="Search Another Student Name"></b>

	<input type="submit" name="submit" value="Search" size="40"  style="background-color:black; color:white;">
	</form>
<hr>
<table border='1' style="background-color:black; color:white;" cellpadding='10' align='center'>
<tr style="background-color:lightgray; color:black;">
	<th>No</th><th>Clg_Logo</th><th>Clg_Name</th><th>Clg_ContactNo</th><th>Stud_Image</th><th>Stud_Name</th><th>DOB</th><th>Year</th><th>Address</th><th>Mobile_ No</th><th>Action</th>
</tr>
<?php

	 $conn->query("SELECT * FROM bhms_table where Stud_Name like '%$search%'");
	//@$q = mysql_query("select * from clg_table1 where Stud_Name like '%$search%'");
	while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
	{	
?>
<tr>
	
<td><?php echo $row['No'];?></td><td><img src="upload/<?php echo $row['Clg_Logo'];?>" height="50" width="50"></td><td><?php echo $row['Clg_Name']; ?></td>
	<td><?php echo $row['Phone_No']; ?></td><td><img src="upload/<?php echo $row['Stud_Image'];?>" height="50" width="80"></td><td><?php echo $row['Stud_Name'];?></td><td><?php echo $row['DOB'];?></td><td><?php echo $row['Year'];?></td><td><?php echo $row['Address'];?></td><td><?php echo $row['Mobile_No'];?></td>
	
	<td>
		<a href="edit.php?update=<?php echo $row['No']; ?>"> EDIT </a>||
		<a href="bhms_display.php?delete=<?php echo $row['No']; ?>">DELETE</a> ||
		<a href="print.php?print=<?php echo $row['No']; ?>">PRINT</a>
	</td>
</tr>
	<?php } ?>
</table>
	<h1><center><a href="bhms_display.php">Back</a></h1>
</body>
</html>
