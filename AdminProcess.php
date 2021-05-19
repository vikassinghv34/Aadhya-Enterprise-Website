<?php

include('header1.php');
include('conn.php');
$Name = $_POST['Name'];
$Email= $_POST['Email'];
$Phone= $_POST['Phone'];
$add=$_POST['add'];




	 $sql = "INSERT INTO users(UserEmail,UserFirstName,UserPhone,UserAddress)
	 VALUES ('$Email','$Name','$Phone','$add')";
	 
if(mysqli_query($conn,$sql))
{
echo '<script>alert("Registered SuccessFull!"); window.location.href="AdminManageUser.php";</script>';
	
}
else
{
	echo mysqli_error($conn);
}

?>


