<?php include('conn.php');
	$Id=$_GET['Id'];
	mysqli_query($conn,"delete from `vendors` where Id='$Id'");
	echo '<script>window.location.href = "AdminManageVendor.php";</script>';  
?>

