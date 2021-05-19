<?php
include('header.php');
include('conn.php');
if (isset($_SESSION['id'])) {

    $uid = $_SESSION['id'];

    if (isset($_GET["ProductID"])) {
        $pid = $_GET["ProductID"];
        $qry2 = mysqli_query($conn, "select * from cartdetails where ProductID='$pid' AND UserID='$uid'"); // select query

    } else {
        $qry2 = mysqli_query($conn, "select * from cartdetails where UserID=$uid");
        error_reporting(0);
    }
    $qry = mysqli_query($conn, "select * from users where UserID='$uid'"); // select query

    $row = mysqli_fetch_array($qry); // fetch data

    if (isset($_POST['signup'])) {
        $message = "";
        $uid = mysqli_real_escape_string($conn, $uid);
        $id = mysqli_real_escape_string($conn, $_POST['pid']);

        $pname = mysqli_real_escape_string($conn, $_POST['pname']);
        $qty = mysqli_real_escape_string($conn, $_POST['qty']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $tprice = mysqli_real_escape_string($conn, $_POST['tprice']);


        $id2 = mysqli_real_escape_string($conn, $_POST['pid2']);
        $pname2 = mysqli_real_escape_string($conn, $_POST['pname2']);
        $qty2 = mysqli_real_escape_string($conn, $_POST['qty2']);
        $price2 = mysqli_real_escape_string($conn, $_POST['price2']);
        $tprice2 = mysqli_real_escape_string($conn, $_POST['tprice2']);


        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['mail']);
        $add = mysqli_real_escape_string($conn, $_POST['add']);
        $add2 = mysqli_real_escape_string($conn, $_POST['add2']);
        $zip = mysqli_real_escape_string($conn, $_POST['zip']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $opt = mysqli_real_escape_string($conn, $_POST['optradio']);

        if($Count === 1){
            $sql="INSERT INTO `orders`(`OrderUserID`,`OrderProductID`,`OrderName`,`OrderAmount`,`TotalAmount`,`OrderQuantity`,`OrderShipName`,`OrderShipAddress`,`OrderShipAddress2`,`OrderCity`,`OrderState`,`OrderZip`,`OrderPhone`,`OrderEmail`) VALUES('" . $uid . "',' $id','" . $pname . "','" . $price . "','" . $tprice . "','" . $qty . "','" . $fname . "','" . $add . "','" . $add2 . "','" . $city . "','" . $state . "','" . $zip . "','" . $phone . "','" . $email . "')";
        }else{
            $sql="INSERT INTO `orders`(`OrderUserID`,`OrderProductID`,`OrderName`,`OrderAmount`,`TotalAmount`,`OrderQuantity`,`OrderShipName`,`OrderShipAddress`,`OrderShipAddress2`,`OrderCity`,`OrderState`,`OrderZip`,`OrderPhone`,`OrderEmail`) VALUES('" . $uid . "',' $id2','" . $pname . "','" . $price . "','" . $tprice . "','" . $qty . "','" . $fname . "','" . $add . "','" . $add2 . "','" . $city . "','" . $state . "','" . $zip . "','" . $phone . "','" . $email . "'),('" . $uid . "',' $id2','" . $pname2 . "','" . $price2 . "','" . $tprice2 . "','" . $qty2 . "','" . $fname . "','" . $add . "','" . $add2 . "','" . $city . "','" . $state . "','" . $zip . "','" . $phone . "','" . $email . "')";
        }
        $query1=mysqli_query($conn,$sql);
        $query = mysqli_query($conn, "UPDATE users SET UserFirstName='$fname',UserLastName='$lname',UserAddress='$add',UserAddress2='$add2',UserZip='$zip',UserState='$state',UserCity='$city',UserPaymentMethod='$opt' WHERE UserID='$uid' ");
        if ($query1) {
?>
            <script>
                alert('Order Successfully');
                location.replace("profile.php");
            </script>
    <?php
            exit();
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    // }
    // here we set else for id product id is not here
    // else { 
    ?>
    <!-- <script>
            alert('please login .........first');
            location.replace("buy.php");
        </script> -->
<?php
    // }
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
                $("#city").html(data);
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
                <input type="button" class="btn btn-secondary" data-toggle="collapse" value="Product Details" data-target="#demo">
            </div>
            <?php
            $Count = 1;
            $final=null;
            if (!$qry2) {
                exit;
            }
            if ($qry2->num_rows == 0) {
                // return null;
                echo "NO data found";
                exit;
            } else {
                $rowcount = $qry2->num_rows;

                while ($pdts = $qry2->fetch_assoc()) {
                    $total = ($pdts['ProductQuantity']) * ($pdts['ProductPrice']);
                    $final += $total;
                    if ($Count < $rowcount) {
            ?>
                        <div class="collapse show" id="demo">
                            <input type="hidden" id="pid" name="pid" value="<?php echo $pdts['ProductID']; ?>">
                            <div class="form-group"><u><strong>Product-<?php echo $Count++; ?></strong></u></div>
                            <div class="form-group">
                                <label for="name">Product Name:</label>
                                <input type="text" class="form-control" id="pname" value="<?php echo $pdts['ProductName']; ?>" name="pname" readonly>
                            </div>
                            <div class="form-group">
                                <label for="qty">Product Quantity:</label>
                                <input type="number" class="form-control" id="qty" value="<?php echo $pdts['ProductQuantity']; ?>" name="qty" required readonly>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please enter valid Quantity.</div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="price">Product Price:</label>
                                        <input type="text" id="price" class="form-control" value="<?php echo $pdts['ProductPrice']; ?>" name="price" readonly>

                                    </div>
                                    <div class="col">
                                        <label for="price">Total Product Price:</label>
                                        <input type="text" id="price" class="form-control" value="<?php echo $total; ?>" name="tprice" readonly>

                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2">
                            <small><a class="btn btn-info" style="color: whitesmoke;" href='http://localhost/code/SEM%206/testing/bs4/checkoutitemdelete.php?id=<?php echo $pdts["ProductID"]; ?>'>Remove</a></small>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="collapse show" id="demo">
                            <input type="hidden" id="pid" name="pid2" value="<?php echo $pdts['ProductID']; ?>">
                            <div class="form-group"><u><strong>Product-<?php echo $Count++; ?></strong></u></div>

                            <div class="form-group">
                                <label for="name">Product Name:</label>
                                <input type="text" class="form-control" id="pname" value="<?php echo $pdts['ProductName']; ?>" name="pname2" readonly>
                            </div>
                            <div class="form-group">
                                <label for="qty">Product Quantity:</label>
                                <input type="number" class="form-control" id="qty" value="<?php echo $pdts['ProductQuantity']; ?>" name="qty2" required readonly>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please enter valid Quantity.</div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="price">Product Price:</label>
                                        <input type="text" id="price" class="form-control" value="<?php echo $pdts['ProductPrice']; ?>" name="price2" readonly>

                                    </div>
                                    <div class="col">
                                        <label for="price">Total Product Price:</label>
                                        <input type="text" id="price" class="form-control" value="<?php echo $total; ?>" name="tprice2" readonly>

                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2">
                            <small><a class="btn btn-info" style="color: whitesmoke;" href='http://localhost/code/SEM%206/testing/bs4/checkoutitemdelete.php?id=<?php echo $pdts["ProductID"]; ?>'>Remove</a></small>
                            </div>

                            
                        </div>
                        <div class="form-group">
                            <label for="price">Total Amount</label>
                            <input type="text" id="price" class="form-control" value="<?php echo $final ?>" readonly>
                            </div>
            <?php }
                }
            } ?>
            <!-- Billing Address -->
            <div class="row mt-3">
                <input type="button" class="btn btn-secondary" data-toggle="collapse" value="Billing Adrress" data-target="#demo1">
            </div>
            <div class="collapse show" id="demo1">
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
                    <input type="email" class="form-control" id="phone" value="<?php echo $row['UserPhone']; ?>" name="phone" readonly>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid E-mail address / Username.</div>
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
                                <?php if (isset($row['UserState'])) { ?>
                                    <option><?php echo $row['UserState']; ?></option>
                                <?php } else { ?>
                                    <option></option>
                                <?php } ?>
                                <option value="Bihar">Bihar</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Delhi">Delhi</option>
                            </select>
                        </div>
                        <div class="col-4" id="response">
                            <label for="state">City:</label>
                            <select class="form-control city" name="city" id="city" required>
                                <?php if (isset($row['UserCity'])) { ?>
                                    <option><?php echo $row['UserCity']; ?></option>
                                <?php } else { ?>
                                    <option></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment method -->
            <div class="row mt-3">
                <input type="button" class="btn btn-secondary" data-toggle="collapse" value="Payment Method" data-target="#demo2">
            </div>
            <div class="collapse show mt-3" id="demo2">
                <div class="form-group form-check">
                    <div class="form-check-label disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="optradio" value="cash on delivery" required autofocus>Cash on Delivery
                            <!-- <div class="valid-feedback">Valid.</div> -->
                            <div class="invalid-feedback">Select to continue...</div>

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
            <button type="submit" name="signup" value="Submit" class="btn btn-primary mt-4">Place Order</button>

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