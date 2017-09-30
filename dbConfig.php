<?php
	@ob_start();
	session_start();
	// Database Connection
	$databaseHost = "localhost";
	$databaseUsername = "root";
	$databasePassword = "";
	$databaseName = "admission2018";


	try{
		//PDO Style
		$conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;",$databaseUsername,$databasePassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";

	// User Registeration Page
	if(isset($_POST['addRegister']))
	{
    
            $fullname = $_POST['fullname'];
            $gender = $_POST['gender'];
            $bgroup = $_POST['bgroup'];
            $address = $_POST['address'];
            $city =  $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $pnumber = $_POST['pnumber'];
            $email = $_POST['email'];
            $password = $_POST['password'];
			$password2 = $_POST['password2'];
	
			if($password == $password2)
			{
                $password = md5($password);
				//PDO Style Insert

				$sql = "INSERT INTO `student_data` VALUES 
				(NULL,'$fullname','$gender','$bgroup','$address','$city','$state','$zip','$pnumber','$email','$password')";
				if($conn->query($sql))
				{
					echo "Registration Successful";
				}
				else
				{
					echo "An Error Occured Contact SysAdmin";	
				}	
		}
	}
}
		catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}

?>