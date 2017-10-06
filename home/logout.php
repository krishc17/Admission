<?php
session_start();
if($_SESSION['email']==1){
    $_SESSION['email']==0;
    header("Location: ../index.php");
    unset($_SESSION['email']);
    session_destroy();
}
?>