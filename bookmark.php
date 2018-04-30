<?php
    session_start();
    include('config.php');
    extract($_POST);
    
    
    mysqli_query($con,"insert into  tbl_bookmark values(NULL,'".$_SESSION['user']."','".$_REQUEST['movid']."')");
   
    $_SESSION['success']="Booking Cancelled Successfully";
    header('location:profile.php');
?>