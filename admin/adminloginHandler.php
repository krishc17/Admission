<?php
session_start();
$errmsg_array = array();
$errflag = false;   

    $databaseHost = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $databaseName = "admission2018";

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
            echo "This Course Already Exists";
        }
        else{
            $sql = "INSERT INTO `courses` VALUES (NULL,'$coursename')";
                    if ($conn->query($sql))
                    {
                    echo "Course Inserted Successfully";
                    }
                      else
                    {
                    echo "An Error Occured Contact SysAdmin";
                    }
        }


    }

?>