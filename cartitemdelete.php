<?php
session_start();
include('conn.php');
// include_once("products.php");
// $id = $_GET['ProductID'];
$id=$_GET["id"];
// $uid = $_SESSION['id'];
$sql1 = "DELETE FROM `cartdetails` WHERE ProductID=$id";
// $del=mysqli_query()
// if(mysqli_query($conn,$sql1))
// {
//     header("Location: trial.php");
// }
$del=mysqli_query($conn,$sql1);
// $conn->close();
if($del)
{
    mysqli_close($conn); // Close connection
    header("location:cart.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>