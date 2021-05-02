<?php
session_start();
include("conn.php");

if(isset($_GET['token'])){
    $token=$_GET['token'];
    $updatequery="update users set UserEmailVerified='active' where UserVerificationCode='$token'";
    $query=mysqli_query($conn,$updatequery);
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg']="Account updated successfully";
            header('location: login.php');
        }
        else{
            $_SESSION['msg']="You are logged out";
            header('location: login.php');
        }
    }
    else{
        $_SESSION['msg']="Account not updated";
        header('location:signup.php');
    }
}
?>