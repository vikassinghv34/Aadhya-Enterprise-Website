<?php include('header1.php');?>


<html lang="en">
<head>
  
  
</head>
<body>



<?php

include "conn.php"; // Using database connection file here

$Id = $_GET['Id']; // get id through query string

$query = mysqli_query($conn,"select * from vendors where Id='$Id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['Update'])) // when click on Update button
{
    $UserName = $_POST['UserName'];
    $FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
	
     mysqli_query($conn,"UPDATE `vendors` SET  UserName='$UserName', FullName='$FullName', Email='$Email' , PhoneNumber='$PhoneNumber' WHERE Id='$Id'");
	
    
     echo '<script>window.location.href = "AdminManageVendor.php";</script>';  
     
        
}
?>
<div class="container">
 <br>
<div class="card">
  <div class="card-header">Update Vendors</div>

  <div class="card-body"> <div class="row">


<form method="POST">
<input type="text" name="UserName" value="<?php echo $row['UserName'] ?>" placeholder="Enter User Name" Required>
  <input type="text" name="FullName" value="<?php echo $row['FullName'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="Email" value="<?php echo $row['Email'] ?>" placeholder="Enter Email" Required>
  <input type="text" name="PhoneNumber" value="<?php echo $row['PhoneNumber'] ?>" placeholder="Enter phone number" Required>
  <input type="submit" name="Update" value="Update">
</form>
</div>
</div>