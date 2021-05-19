<?php
include('conn.php');
$UserName= $_POST['UserName'];
$FullName = $_POST['FullName'];
$Email= $_POST['Email'];
$PhoneNumber= $_POST['PhoneNumber'];




	 $sql = "INSERT INTO vendors(UserName,FullName,Email,PhoneNumber)
	 VALUES ('$UserName','$FullName','$Email','$PhoneNumber')";
	 
if(mysqli_query($conn,$sql))
{
echo '<script>alert("Registered SuccessFull!"); window.location.href="AdminManageVendor.php";</script>';
	
}
else
{
	echo mysqli_error($conn);
}

?>


