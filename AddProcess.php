<?php
include('header1.php');
include('conn.php');
$ProductName = $_POST['ProductName'];
$ProductPrice = $_POST['ProductPrice'];
$ProductCartDesc = $_POST['ProductCartDesc'];
$ProductShortDesc = $_POST['ProductShortDesc'];
$ProductImage = $_POST['ProductImage'];
$ProductCategoryID = $_POST['ProductCategoryID'];

	 $sql = "INSERT INTO products(ProductName,ProductPrice,ProductCartDesc,ProductShortDesc,ProductImage,ProductCategoryID)
	 VALUES ('$ProductName','$ProductPrice','$ProductCartDesc','$ProductShortDesc','$ProductImage','$ProductCategoryID')";
	 
if(mysqli_query($conn,$sql))
{
echo '<script>alert("Registered SuccessFull!"); window.location.href="AdminManageItem.php";</script>';
	
}
else
{
	echo mysqli_error($conn);
}

?>


