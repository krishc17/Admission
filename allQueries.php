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


            $qry = "INSERT INTO `student_data` VALUES (NULL,'$fullname','$gender','$bgroup','$address','$city','$state','$zip','$pnumber','$email','$password')";
            
            if($password == $password2){
                $password = md5($password);
                mysqli_query($conn,$query);    
            }else{
                
            }
    
        }    

?>