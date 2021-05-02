<?php session_start(); include('header.php'); include('conn.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<style>
    .cart-header{
        width: 25%;
        align-self: center;
        padding: 5px;
    }
</style>
<body>
<?php
        $id = $_GET['ProductID'];
        $sql = "SELECT ProductName,ProductPrice,ProductQuantity FROM products Where ProductID=$id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            exit;
        }
        if ($result->num_rows == 0) {
            return null;
        } else {
            $rowcount = $result->num_rows;
            
            while ($pdts = $result->fetch_assoc()) {
                $total=($pdts['ProductQuantity'])*($pdts['ProductPrice']);
                $final=$total+$total;
        ?>
    <div class="container mt-5">
        <div class="row" >
        <table style="width: 100%;">
            <tr class="row bg-primary">
                <th class="col-3">#</th>
                <th class="col-3">Name</th>
                <th class="col-2">Quantity</th>
                <th class="col-2">Price per Piece</th>
                <th class="col-2">Total</th>
            </tr>
            <tr class="row" style="background-color: whitesmoke;">
                <td class="col-3">#</td>
                <td class="col-3"><?php echo $pdts["ProductName"] ?></td>
                <td class="col-2"><?php echo $pdts["ProductQuantity"] ?></td>
                <td class="col-2"><i class="fas fa-rupee-sign"></i> <?php echo $pdts["ProductPrice"] ?></td>
                <td class="col-2"><i class="fas fa-rupee-sign"></i> <?php echo $total; ?></td>
            </tr>
            <tr class="row" style="background-color: whitesmoke;">
            <td class="col-10" align="right">Total:</td>
            <td class="col-2"><i class="fas fa-rupee-sign"></i> <?php echo $final; ?></td>
            </tr>
        </table>
        </div>
        <?php
            }
        }

        ?>
    </div>
</body>
</html>