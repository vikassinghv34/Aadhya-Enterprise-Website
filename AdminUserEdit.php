<?php include('header1.php');?>
</head>
<body>



<?php

include "conn.php"; // Using database connection file here

$Id = $_GET['Id']; // get id through query string

$query = mysqli_query($conn,"select * from users where UserID='$Id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['Update'])) // when click on Update button
{
    $FullName = $_POST['FullName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $add=$_POST['add'];
	
     $query=mysqli_query($conn,"UPDATE `users` SET  UserFirstName='$FullName', UserPhone='$PhoneNumber', UserAddress='$add' WHERE UserID='$Id'");
	
    if($query){
        // redirects to all records page
        echo '<script>window.location.href = "AdminManageUser.php";</script>'; 
    }else{
      echo "Error".$sql."".mysqli_error($conn);
    }  
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="FullName" value="<?php echo $row['UserFirstName'] ?>">
  <input type="text" name="PhoneNumber" value="<?php echo $row['UserPhone'] ?>">
  <input type="text" name="add" value="<?php echo $row['UserAddress'] ?>">

  <input type="submit" name="Update" value="Update">
</form>