<?php
session_start();
unset($_SESSION['searchid']);
header('location:cart.php');
?>