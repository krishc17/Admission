<?php
session_start();
    $errmsg_array = array();
    $errflag = false;   
    $msg="";
    include 'variables.php';
    $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //login admin
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if($email == '') {
            $errmsg_arr[] = 'You must enter your Email';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'You must enter your Password';
            $errflag = true;
        }

        $result = $conn->prepare("SELECT * FROM admins WHERE email=? AND password=?");
        $result->bindParam(1, $email);
        $result->bindParam(2, $password);
        $result->execute();
        $rows = $result->fetch(PDO::FETCH_NUM);
        if($rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: ../admin/admin.php");
        }
        else{
            $errmsg_arr[] = 'Username and Password are not found';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: ../admin");
            exit();
        }
         
    }
    // insert course
    if(isset($_POST['addCourse']))
    {
        $coursename = $_POST['cname'];
        
        $query = $conn->prepare( "SELECT `coursename` FROM `courses` WHERE `coursename` = ?" );			
        $query->bindValue( 1, $coursename );
        $query->execute();
        if($query->rowCount() > 0 )
        {	
            $msg="This Course Already Exists";
            header("Location: addCourse.php");
        }
        else{
            $sql = "INSERT INTO `courses` (`coursename`)VALUES ('$coursename')";
                    if ($conn->query($sql))
                    {
                        $msg="Course registered successfully";       
                        header("Location: addCourse.php");                        
                    }
                    else
                    {
                        echo "An Error Occured Contact SysAdmin";
                    }
        }


    }

?>