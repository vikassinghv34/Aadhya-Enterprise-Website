<?php
include('header.php');
include('conn.php');
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $qry = mysqli_query($conn, "select * from users where UserID='$id'"); // select query

    $row = mysqli_fetch_array($qry); // fetch data

    if (isset($_POST['signup'])) {
        $message = "";
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        // $email = mysqli_real_escape_string($conn, $_POST['mail']);
        $add = mysqli_real_escape_string($conn, $_POST['add']);
        $add2 = mysqli_real_escape_string($conn, $_POST['add2']);
        $zip = mysqli_real_escape_string($conn, $_POST['zip']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $opt = mysqli_real_escape_string($conn, $_POST['optradio']);

        $query = mysqli_query($conn, "UPDATE users SET UserFirstName='$fname',UserLastName='$lname',UserAddress='$add',UserAddress2='$add2',UserZip='$zip',UserState='$state',UserCity='$city',UserPaymentMethod='$opt' WHERE UserID='$id' ");

        if ($query) {
?>
            <script>
                alert('hi');
                location.replace("buy.php");
            </script>
    <?php
            exit();
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
} else {
    ?>
    <script>
        alert('please login first');
        location.replace("login.php");
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script>
    $(document).ready(function() {
        $("select.state").change(function() {
            var selectedstate = $(".state option:selected").val();
            $.ajax({
                type: "POST",
                url: "cityselection.php",
                data: {
                    state: selectedstate
                }
            }).done(function(data) {
                $("#response").html(data);
                console.log(data);
            });
        });
    });
</script>

<body>
    <div class="container bg-light mt-5 mb-5" style="height:auto; padding:40px; border-radius:25px;">
        <!--here we can set height and padding of container.-->
        <h2><strong><u>Checkout Form</u></strong></h2>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="needs-validation" novalidate>
            <div class="row">
                <button class="btn btn-secondary" data-toggle="collapse" data-target="#demo">Billing Address</button>
            </div>
            <div class="collapse show" id="demo">
                <!-- <h3>Billing Address</h3> -->
                <div class="form-group">
                    <div class="row mt-3">
                        <div class="col">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" pattern="^[a-zA-Z ]{3,10}$" value="<?php echo $row['UserFirstName']; ?>" name="fname" required autofocus>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter valid Input.</div>
                        </div>
                        <div class="col">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" pattern="^[a-zA-Z]{3,10}$" value="<?php echo $row['UserLastName']; ?>" name="lname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter valid Input.</div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail">Username/E-mail:</label>
                    <input type="email" class="form-control" id="mail" value="<?php echo $row['UserEmail']; ?>" name="mail" readonly>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid E-mail address / Username.</div>
                </div>
                <div class="form-group">
                    <label for="add">Address:</label>
                    <input type="text" id="add" class="form-control" pattern=".{10,50}" value="<?php echo $row['UserAddress']; ?>" name="add" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid Address.</div>
                </div>
                <div class="form-group">
                    <label for="add2">Address-2 (Optional):</label>
                    <input type="text" id="add2" class="form-control" pattern=".{10,50}" value="<?php echo $row['UserAddress2']; ?>" name="add2">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid Address.</div>
                </div>
                <div class="form-group">

                    <div class="row">
                        <div class="col-4">
                            <label for="zip">Zip Code:</label>
                            <input type="text" name="zip" id="zip" pattern="\d{6}" class="form-control" value="<?php echo $row['UserZip']; ?>" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter valid Zip code.</div>
                        </div>
                        <div class="col-4">
                            <label for="state">State:</label>
                            <select class="form-control state" name="state" id="state" required>
                                <option></option>
                                <option value="Bihar">Bihar</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Delhi">Delhi</option>
                            </select>
                            <!-- <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Password.</div> -->
                        </div>
                        <div class="col-4" id="response">

                        </div>
                    </div>
                </div>

                <!-- <button type="submit" class="btn btn-primary" data-toggle="collapse" data-target="#demo2">Continue to Payment</button> -->
            </div>
            <div class="row mt-3">
                <button class="btn btn-secondary" data-toggle="collapse" data-target="#demo2">Payment</button>
            </div>
            <div class="collapse mt-3" id="demo2">
                <div class="form-group form-check">
                    <div class="form-check-label disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="optradio" value="cash on delivery" required>Cash on Delivery
                        </label>
                    </div>
                    <div class="form-check-label disabled">
                        <label class="form-check-label disabled">
                            <input type="radio" class="form-check-input" value="debit card" name="optradio" disabled>Debit Card
                        </label>
                    </div>
                    <div class="form-check-label disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="credit card" name="optradio" disabled>Credit Card
                        </label>
                    </div>
                </div>
                <!-- <button type="submit" name="signup" value="Submit" class="btn btn-primary mt-2" name="signup" value="Submit">Continue to Checkout</button> -->
            </div>
            <button type="submit"  name="signup" value="Submit" class="btn btn-primary mt-4">Continue to Checkout</button>

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
    <?php include('footer.php'); ?>
</body>

</html>