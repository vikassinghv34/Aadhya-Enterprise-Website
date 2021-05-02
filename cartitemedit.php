<?php
session_start();
// require("header.php");
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

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <form class="contaier mt-5 mb-5" method="POST" align="center">
    <h3 class="mb-3">Update Data</h3>
        <input type="number" default="1" name="quantity" min="1" value="<?php echo $pdts['ProductQuantity'] ?>" placeholder="1" Required>
        <input class="btn-success" type="submit" name="update" value="Update">
    </form>
</body>
<?php include "footer.php"; ?>

</html>
