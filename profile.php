<?php
include("header.php");
include_once('conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .path a:hover {
            color: black;
            text-decoration: none;
        }

        .path a {
            color: gray;
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
        <a href="profile.php">Profile</a>
        <section class="px-2">
            <div class="row">
                <button class="btn btn-secondary" data-toggle="collapse" data-target="#demo">Account Details</button>
            </div>
            <div class="collapse show" id="demo">
                <div class="outer">
                    <div class="card bg-light mb-2 mt-1 text-dark">
                        <?php
                        $sql_query = "Select * from users where UserID=" . $_SESSION['id'];
                        $Count = 1;
                        //  $connection = $db-> getconn();
                        $result = mysqli_query($conn, $sql_query);
                        if (!$result) {
                            exit;
                        }
                        if ($result->num_rows == 0) {
                            return null;
                        } else {
                            $rowcount = $result->num_rows;
                            while ($pdts = $result->fetch_assoc()) {
                                //  $tot = ($pdts['price']*$pdts['quantity']);
                                //  $total += $tot;
                                if ($Count < $rowcount) {
                        ?>
                                    <div class="card-body">

                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="card-body">
                                        <!-- <h3>Name : <span style="text-transform: uppercase;"> <?php //echo $pdts["UserFirstName"], $pdts["UserLastName"]; ?></span></h3>

                                        <h3>Phone no. : <?php //echo $pdts["UserPhone"]; ?></h3>

                                        <h3>Email id : <?php //echo $pdts["UserEmail"]; ?></h3>

                                        <h3>Address : <?php //echo $pdts["UserAddress"]; ?><br><?php //echo $pdts["UserCity"] ?></h3>

                                        <h3>Password : <?php //echo $pdts["UserPassword"]; ?></h3> -->





                                        <table class="table table-striped table-borderless text-darker text-25" >
                                            <tr>
                                                <td>Name:</td><td style="text-transform: uppercase;"><?php echo $pdts["UserFirstName"]?> <?php echo $pdts["UserLastName"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone No. :</td>
                                                <td><?php echo $pdts["UserPhone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email Id :</td>
                                                <td><?php echo $pdts["UserEmail"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address :</td>
                                                <td><?php echo $pdts["UserAddress"]; ?><br><?php echo $pdts["UserCity"]; ?>-<?php echo $pdts["UserZip"]; ?><br><?php echo $pdts["UserState"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Password :</td>
                                                <td><?php echo $pdts["UserPassword"]; ?></td>
                                            </tr>

                                        </table>
                                        <button class="btn btn-dark" onclick='window.location="http://localhost/code/SEM%206/testing/bs4/profileedit.php?id=<?= $_SESSION["id"]?>";'>Edit Details</button>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-secondary my-2" data-toggle="collapse" data-target="#demo2">Orders</button>
            </div>
            <div id="demo2" class="collapse mb-2">
            <div class="card bg-light mb-2 mt-1 text-dark">
                        <?php
                        $sql_query = "Select * from orderdetails where UserID=" . $_SESSION['id'];
                        $Count = 1;
                        //  $connection = $db-> getconn();
                        $result = mysqli_query($conn, $sql_query);
                        if (!$result) {
                            exit;
                        }
                        if ($result->num_rows == 0) {
                            // return null;
                            echo "No Data Found";
                        } else {
                            $rowcount = $result->num_rows;
                            while ($pdts = $result->fetch_assoc()) {
                                //  $tot = ($pdts['price']*$pdts['quantity']);
                                //  $total += $tot;
                                if ($Count < $rowcount) {
                        ?>
                                    <div class="card-body">

                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="card-body">
                                    <table class="table table-striped table-borderless text-darker text-25" >
                                            <tr>
                                                <td>Order Id:</td><td ><?php echo $pdts["DetailOrderID"] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Product Name :</td>
                                                <td><?php echo $pdts["DetailName"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Quantity :</td>
                                                <td><?php echo $pdts["DetailQuantity"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Price :</td>
                                                <td><?php echo $pdts["DetailPrice"]; ?></td>
                                            </tr>
                                           
                                        </table>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>            </div>
        </section>
    </div>

    <?php include("footer.php"); ?>
</body>

</html>