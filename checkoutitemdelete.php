<?php
session_start();
include('conn.php');

$id=$_GET["id"];
$sql1 = "DELETE FROM `cartdetails` WHERE ProductID=$id";

$del=mysqli_query($conn,$sql1);
// $conn->close();
if($del)
{
    mysqli_close($conn); // Close connection
    header("location:buy.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>