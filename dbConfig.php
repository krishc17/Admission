<?php
	session_start();
	// Database Connection
	$databaseHost = 'localhost';
	$databaseName = 'admission2018';
	$databaseUsername = 'root';
	$databasePassword = '';
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	if(isset($_POST['addRegister'])){
		$fullname = $_POST['fullname'];
		$gender = $_POST['gender'];
		$bgroup = $_POST['bgroup'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$pnumber = $_POST['pnumber'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		echo $fullname;
		if($password == $password2){
			
		}else{
			// throw error
		}

	}

?>
