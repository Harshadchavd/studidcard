<?php

	if(isset($_POST['submit']))
	{
		$f_name = $_FILES['myfile']['name'];
		
		$f_tmp = $_FILES['myfile']['tmp_name'];		
		
		$f_size = $_FILES['myfile']['size'];
		
		$f_type = $_FILES['myfile']['type'];
		
		$f_ext = explode('.',$f_name);
		
		$f_ext = end($f_ext);
		
		
		
		$store = "upload/".$f_name;
		
		 move_uploaded_file($f_tmp,$store);

		$f_name = $_FILES['myfile1']['name'];
		
		$f_tmp = $_FILES['myfile1']['tmp_name'];		
		
		$f_size = $_FILES['myfile1']['size'];
		
		$f_type = $_FILES['myfile1']['type'];
		
		$f_ext = explode('.',$f_name);
		
		$f_ext = end($f_ext);
		
		
		
		$store = "upload/".$f_name;
		
		 move_uploaded_file($f_tmp,$store);
	
		
		header('refresh:0;form.php');
	}
?>