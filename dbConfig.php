<?php
@ob_start();
session_start();

// Database Connection

$databaseHost = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName = "admission2018";
//Register
	$conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);	
	// User Login
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['pass'];

		if(empty($email) && empty($password))
		{
			// Do Nothing
		}
		else
		{
			$sql = "SELECT FULLNAME,EMAIL,PASSWORD FROM `student_data`";
		}
	}

?>
