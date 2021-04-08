<?php include('header.php');
session_start();
include('conn.php');
?>
<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
      margin-right: 0;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button:hover {
      background-color: #555;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
  </style>
</head>

<body>
  <h2 style="text-align:center">Products</h2>

  <div id="items" class="container" style="background-color:whitesmoke; display:grid; grid-template-columns:repeat(auto-fill,minmax(250px,1.1fr)); gap: 1em; align-items:stretch; ">


    <?php
    $sql = "SELECT * FROM products";
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

        <div class="card" style="width: 16rem; margin-bottom:15px;">
          <img class="card-img-top" src="<?php echo $pdts["ProductImage"] ?>" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Name: <?php echo $pdts["ProductName"] ?></br>Rate Per Unit:<?php echo $pdts["ProductPrice"] ?></br>Description:</p></br>
            <!-- <input type="text" class="quantity" name="quantity" value="1" size="2" /> -->
            <a href="view.php" onclick='addtocart("<?php echo $pdts["pid"] ?>","<?php echo $pdts["price"] ?>");' class="btn btn-primary">Add to Cart</a>
            <a href="view.php" onclick='addtocart("<?php echo $pdts["pid"] ?>","<?php echo $pdts["price"] ?>");' class="btn btn-success">Buy Now</a>
          </div>
        </div>

        <!-- <div class="row" style="margin-right: 0px; margin-left:0px;">
    <div class="column">
      <div class="card">
        <img src="../img/6.jpg" alt="Jane" style="width:100%; height:25vh;">
        <div class="container">
          <h2 align="center">Pipes</h2>

          <p><button class="button"><a href="#">Add to Cart</button></p></a>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="../img/2.jpg" alt="Mike" style="width:100%; height:25vh;">
        <div class="container">
          <h2 align="center">Pipes</h2>

          <p><button class="button"><a href="#">Add to cart</button></p></a>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="../img/1.jpg" alt="John" style="width:100%; height:25vh;">
        <div class="container">
          <h2 align="center">Pipes</h2>
          <p><button class="button"><a href="#">Add to cart</button></p></a>
        </div>
      </div>
    </div>
  </div> -->
    <?php
      }
    }
    ?>
  </div>
  <?php
  include('footer.php'); ?>

</body>

</html>