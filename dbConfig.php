<?php
	@ob_start();
	session_start();
	// Database Connection
	$databaseHost = 'localhost';
	$databaseName = 'admission2018';
	$databaseUsername = 'root';
	$databasePassword = '';
	$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	if(mysqli_connect_errno())
	{
		echo "Failed to Connect to the Database, Following is the error " . mysqli_connect_error();
	}

?>
