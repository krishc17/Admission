<?php
include_once 'dbConfig.php';

// User Registeration Page
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

            if($password == $password2){
                $password = md5($password);
                $query = "INSERT INTO `student_data` (`ID`,`fullname`,`GENDER`,`BGROUP`,`CITY`,`STATE`,`ZIP`,`PNUMBER`,`EMAIL`,`PASSWORD`)VALUES 
                (NULL,'$fullname','$gender','$bgroup','$address','$city','$state','$zip','$pnumber','$email','$password')";      
                mysqli_query($conn,$query);   
                echo $password; 
                echo "Success";
            }else{
                echo "Error";
            }
    
        }    

?>