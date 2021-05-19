<?php
include('header.php');
include_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .row {
            padding: 5px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {

            opacity: 1;

        }

        .path a:hover {
            color: gray;
            text-decoration: none;
        }

        .path a {
            color: darkgray;
        }

        .path .less {
            color: gray;
            font-weight: bolder;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>

<body>

    <div class="container-fluid path">
        <a href="home.php">Home</a> <label for="" class="less">></label>
        <a href="products.php">Products</a> <label for="" class="less">></label>
        <a href="item.php">Product detail</a>
    </div>
    <div class="container mt-3 mb-5" align="center">
        <?php
        $id = $_GET['ProductID'];
        $uid = $_SESSION['id'];

        $qry = mysqli_query($conn, "select * from cartdetails where ProductID='$id'"); // select query
        $qty = mysqli_fetch_array($qry); // fetch data

        $sql = "SELECT * FROM products Where ProductID=$id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            exit;
        }
        if ($result->num_rows == 0) {
            return null;
        } else {
            $rowcount = $result->num_rows;
            $pdts = $result->fetch_assoc();

        ?>
            <form action="" method="post">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12 card-img-top" align="center">
                            <img src="<?php echo $pdts["ProductImage"] ?>" style="height: 250px;" alt="" width="50%">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 " align="center">
                                <h2><input type="text" class="card-text" size="50" style="text-align: center; border:none;outline:none" name="name" value="<?php echo $pdts["ProductName"] ?>" readonly> </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4><input type="text" name="price" style="text-align: center;border:none; outline:none" value="<?php echo $pdts["ProductPrice"] ?>" readonly></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" align="center">
                                Quantity: <input type="number" name="quantity" min="1" id="quantity" value="<?php echo $pdts['ProductQuantity'] ?>" placeholder="1" required />
                                <!-- <small><input class="btn-success" type="submit" name="update" value="Change"></small> -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" name="cart" value="Add to Cart">
                                <input type="submit" name="buy" class="btn btn-success" value="Buy Now">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['cart'])) // when click on cart button
            {
                $quantity = $_POST['quantity'];
                // $pid = $_POST['pid'];
                $price = $_POST['price'];
                $name = $_POST['name'];
                $res = mysqli_query($conn, "SELECT * FROM cartdetails WHERE UserID='$uid' AND ProductID='$id'");
                $row = mysqli_num_rows($res);

                if ($row === 0) {
                    $sql = "INSERT INTO `cartdetails`(`ProductID`, `UserID`,`ProductQuantity`,`ProductPrice`,`ProductName`) VALUES ('$id','$uid','$quantity','$price','$name')";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
            ?>
                        <script>
                            window.location = "cart.php";
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert('<?php echo $name ?> is already in the cart');
                    </script>
            <?php
                    exit();
                }
            }
            if (isset($_POST['buy'])) // when click on buy now button
            {
                $quantity = $_POST['quantity'];
                // $pid = $_POST['pid'];
                $price = $_POST['price'];
                $name = $_POST['name'];
                $res = mysqli_query($conn, "SELECT * FROM cartdetails WHERE UserID='$uid' AND ProductID='$id'");
                $row = mysqli_num_rows($res);

                if ($row === 0) {
                    $sql = "INSERT INTO `cartdetails`(`ProductID`, `UserID`,`ProductQuantity`,`ProductPrice`,`ProductName`) VALUES ('$id','$uid','$quantity','$price','$name')";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
            ?>
                        <script>
                            window.location = "buy.php";
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert('<?php echo $name ?> is already in the cart');
                    </script>
            <?php
                    exit();
                }
            }
            
            ?>
            <div id="accordion" class="mt-2" align="left">
                <div class="card">
                    <div class="card-header" align="center">
                        <a class="card-link active" data-toggle="collapse" href="#collapseOne">
                            Details
                        </a>
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            Specification
                        </a>
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            Vendor
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $pdts["ProductCartDesc"] ?>
                        </div>
                    </div>


                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $pdts["ProductShortDesc"] ?>
                        </div>
                    </div>


                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <li>Finolex Pvt. Ltd.</li>
                            <li>Duke Pipes Pvt. Ltd.</li>

                        </div>

                    </div>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
</body>
<?php include('footer.php'); ?>

</html>