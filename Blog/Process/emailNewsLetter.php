<?php
	include('../Includes/conn.php');
	//sql query -- Insert data into database
	if (isset($_POST['subscribeBtn'])){
		
		$name = $_POST['fullname'];
		$email = $_POST['email'];
			
		if(!empty($name) && !empty($email)){
			$query = "INSERT INTO email_table (`Sender`, `Email`) VALUES ('$name', '$email')";
			$result = mysqli_query($conn, $query);
			header('location:../blogpage.php');
		}
	} 
		
?>