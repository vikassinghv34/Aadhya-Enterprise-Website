<?php
session_start();
include('conn.php');
// include_once("products.php");
// $id = $_GET['ProductID'];
$id=$_GET["id"];
$quantity=$_GET["quantity"];
$price=$_GET["price"];
$name=$_GET["name"];
$uid = $_SESSION['id'];
$sql1 = "INSERT INTO `cartdetails`(`ProductID`, `UserID`,`ProductQuantity`,`ProductPrice`,`ProductName`) VALUES ('$id','$uid','$quantity','$price','$name')";

// if(mysqli_query($conn,$sql1))
// {
//     header("Location: trial.php");
// }
mysqli_query($conn,$sql1);
$conn->close();

?>