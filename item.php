<?php
include('header.php');
include_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function addtocart(id, quantity, price, name) {
            try {
                fetch("addtocart.php?id=" + id + "&quantity=" + quantity + "&price=" + price + "&name=" + name).then(function(respone) {
                    if (respone.ok) {
                        console.log('done');
                        window.location="unset.php";
                    }
                    console.log(id);
                });
            } catch (id) {
                console.log(id);
            }
        }
    </script>
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
        if(isset($_SESSION["searchid"])){
            $id=$_SESSION["searchid"];
        }
        else{
        $id = $_GET['ProductID'];
        }
        $sql = "SELECT * FROM products Where ProductID=$id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            exit;
        }
        if ($result->num_rows == 0) {
            return null;
        } else {
            $rowcount = $result->num_rows;
            while ($pdts = $result->fetch_assoc()) {

        ?>
                <div class="row">
                    <div class="col-md-12" align="center">
                        <img src="<?php echo $pdts["ProductImage"] ?>" alt="" width="80%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $pdts["ProductName"]?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4><i class="fas fa-rupee-sign"></i> <?php echo $pdts["ProductPrice"] ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        Quantity: <input type="number" name="quantity" id="quantity" placeholder="1" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="" onclick='addtocart("<?php echo $pdts["ProductID"] ?>","<?php echo $pdts["ProductQuantity"] ?>","<?php echo $pdts["ProductPrice"] ?>","<?php echo $pdts["ProductName"] ?>");' class="btn btn-primary">Add to Cart</a>
                        <a href='#' class="btn btn-success">Buy Now</a>
                    </div>
                </div>
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
                                <?php echo $pdts["ProductPrice"] ?>
                            </div>
                        </div>


                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
        }
        ?>
    </div>
</body>
<?php include('footer.php'); ?>

</html>