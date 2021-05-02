<?php
// session_start();
require("header.php");
include "Conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn, "select * from users where UserID='$id'"); // select query

$pdts = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $address = $_POST['address'];

    $edit = mysqli_query($conn, "update users set UserFirstName='$fname', UserLastName='$lname', UserAddress='$address' where UserID='$id'");

    if ($edit) {
        // mysqli_close($conn); // Close connection
        // header("location:profile.php"); // redirects to all records page
        ?>
        <script>
          location.replace("profile.php");
        </script>
        <?php
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
    <div class="container py-5">
    <form method="POST" class="needs-validation" novalidate>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" value="<?php echo $pdts['UserFirstName'] ?>" pattern="^[a-zA-Z ]{3,10}$" name="fname" required autofocus>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid Input.</div>
                </div>
                <div class="col">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" value="<?php echo $pdts['UserLastName'] ?>" pattern="^[a-zA-Z]{3,10}$" name="lname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid Input.</div>
                </div>
            </div>
        </div>
        <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" value="<?php echo $pdts['UserAddress'] ?>" id="address" name="address" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Input.</div>
            </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
    </div>
    <script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>
<?php include "footer.php"; ?>

</html>