<?php
session_start();
error_reporting(0);
require("header.php");
include "Conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn, "select * from cartdetails where ProductID='$id'"); // select query

$pdts = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $quantity = $_POST['quantity'];
    // $age = $_POST['age'];

    $edit = mysqli_query($conn, "update cartdetails set ProductQuantity='$quantity' where ProductID='$id'");

    if ($edit) {
        // mysqli_close($conn); // Close connection
        header("location:cart.php"); // redirects to all records page
        exit;
    } else {
        echo "Error occur";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <form class="contaier mt-5 mb-5" method="POST" align="center">
    <h3 class="mb-3">Update Data</h3>
        <input type="number" name="quantity" min="1" value="<?php echo $pdts['ProductQuantity'] ?>" placeholder="1" Required>
        <input class="btn-success" type="submit" name="update" value="Update">
    </form>
</body>
<?php include "footer.php"; ?>

</html>
