<?php include('header1.php');?>
<html>
</head>
<body>



<?php

include "conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$query = mysqli_query($conn,"select * from products where ProductID='$id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['Update'])) // when click on Update button
{
	$ProductName = $_POST['ProductName'];
	$ProductPrice = $_POST['ProductPrice'];
	$ProductCategoryID = $_POST['ProductCategoryID'];	
    
	$query=mysqli_query($conn," UPDATE  `products` SET ProductName='$ProductName', ProductPrice='$ProductPrice', ProductCategoryID='$ProductCategoryID'  WHERE ProductID='$id'");
	if($query){
		echo '<script>window.location.href = "AdminManageItem.php";</script>';  

	}else{
		echo "Error".$sql."".mysqli_error($conn);
	}
    
        // redirects to all records page
       
}
?>

<h3>Update Data</h3>

<form method="POST">
<input type="text" name="ProductName" value="<?php echo $row['ProductName'] ?>" placeholder="Enter Name" Required>
  <input type="text" name="ProductPrice" value="<?php echo $row['ProductPrice'] ?>" placeholder="Enter Price" Required>
  <input type="text" name="ProductCategoryID" value="<?php echo $row['ProductCategoryID'] ?>" placeholder="Enter Ctegory ID" Required>
  
  <input type="submit" name="Update" value="Update">
</form>





