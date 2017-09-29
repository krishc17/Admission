<?php
	session_start();
	// Database Connection
	$databaseHost = 'localhost';
	$databaseName = 'admission2018';
	$databaseUsername = 'root';
	$databasePassword = '';
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	if(isset($_POST['submit'])){
		$fullname;
		$gender;
		$bgroup;
		$address;
		$city;
		$state;
		$zip;
		$pnumber;
		$email;
		$password;
		$password2;
		if($password == $password2){
			//Insert Data
		}else{
			// throw error
		}

	}

?>
