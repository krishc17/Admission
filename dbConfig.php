<?php
	@ob_start();
	session_start();
	// Database Connection
	$databaseHost = "localhost";
	$databaseUsername = "root";
	$databasePassword = "";
	$databaseName = "admission2018";

	$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	if(mysqli_connect_errno())
	{
		echo "Failed to Connect to the Database, Following is the error " . mysqli_connect_error();
	}

	// User Registeration Page
	if(isset($_POST['addRegister']))
	{
    
            $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
            $gender = mysqli_real_escape_string($conn,$_POST['gender']);
            $bgroup = mysqli_real_escape_string($conn,$_POST['bgroup']);
            $address = mysqli_real_escape_string($conn,$_POST['address']);
            $city = mysqli_real_escape_string($conn, $_POST['city']);
            $state = mysqli_real_escape_string($conn,$_POST['state']);
            $zip = mysqli_real_escape_string($conn,$_POST['zip']);
            $pnumber = mysqli_real_escape_string($conn,$_POST['pnumber']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $password2 = mysqli_real_escape_string($conn,$_POST['password2']);

            if($password == $password2){
                $password = md5($password);
				
				$sql = "INSERT INTO `student_data` (ID,`fullname`,`GENDER`,`BGROUP`,`CITY`,`STATE`,`ZIP`,`PNUMBER`,`EMAIL`,`PASSWORD`) VALUES 
                (NULL,'$fullname','$gender','$bgroup','$address','$city','$state','$zip','$pnumber','$email','$password')";      
				

				$mysqli = @new mysqli($conn);
				if(mysqli_connect_errno())
				{
					echo 'connect failed';
					exit();
				}
				$result = $mysqli->query($sql);
			
				if(!$result){
					echo 'insert error';
					exit();
				}
				echo 'query inserted';
				 // Insert Query
				 // $query = "INSERT INTO `student_data` (ID,`fullname`,`GENDER`,`BGROUP`,`CITY`,`STATE`,`ZIP`,`PNUMBER`,`EMAIL`,`PASSWORD`) VALUES 
                // (NULL,'$fullname','$gender','$bgroup','$address','$city','$state','$zip','$pnumber','$email','$password')";      
				
				//Performing Query
				// $try = mysqli_query($conn,"INSERT INTO `student_data` (ID,`fullname`,`GENDER`,`BGROUP`,`CITY`,`STATE`,`ZIP`,`PNUMBER`,`EMAIL`,`PASSWORD`) VALUES 
				// (NULL,'$fullname','$gender','$bgroup','$address','$city','$state','$zip','$pnumber','$email','$password')");   
                // if($try == false){
				//	echo "error";
				//	mysqli_error($try);
				// 	}
				// else
				// {
				//	echo "	success";
			//		}
            //}else{
             //   echo "Error";
           // }
    
        //}    

			}
		}
?>