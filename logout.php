<?php
session_start();
unset($_SESSION["ID"]);
unset($_SESSION["name"]);
unset($_SESSION['email']);
session_unset();
header("Location:login.php");
?>