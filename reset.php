<?php
// include('header.php');
session_start();
include('conn.php');

if (isset($_GET['token']) && isset($_POST['submit'])) {
  $token = $_GET['token'];
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $cfpwd = mysqli_real_escape_string($conn, $_POST['cfpwd']);
  if ($pwd === $cfpwd) {
    $updatequery = "update users set UserPassword='$pwd' where UserVerificationCode='$token'";
    $query = mysqli_query($conn, $updatequery);
    if ($query) {
      if (isset($_SESSION['msg'])) {
        $_SESSION['msg'] = "Password reseted successfully";
        header('location: login.php');
      } else {
        $_SESSION['msg'] = "You are logged out";
        header('location: login.php');
      }
    } else {
      $_SESSION['msg'] = "Account not updated";
      header('location:signup.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <form method="POST" action="">
    <input type="text" id="pwd" name="pwd" placeholder="enter your password">
    <input type="text" id="cfpwd" name="cfpwd" placeholder="enter your password again">
    <button type="submit" name="submit">submit</button>
  </form>
</body>

</html>