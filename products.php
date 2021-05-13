<?php
include('header.php');
include('conn.php');
?>
<!DOCTYPE html>
<html>

<head>
<script>
    function addtocart(id,quantity,price,name)
    {
      try{
        fetch("addtocart.php?id="+id+"&quantity="+quantity+"&price="+price+"&name="+name).then(function(respone)
        {
          if(respone.ok){
            console.log('done');
          }
          console.log(id);
        });
      }
      catch(id){
        console.log(id);
      }
    }
</script>
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
<?php
if(isset($_GET['ProductCategoryID'])){
  $CategoryID=$_GET['ProductCategoryID'];
    $sql = "SELECT * FROM products WHERE ProductCategoryID=$CategoryID";
}
else
$sql="SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    ?>
  <div class="container-fluid path">
    <a href="home.php">Home</a> <label for="" class="less">></label>
    <a href="products.php?ProductCategoryID=<?= $CategoryID?>">Products</a>
  </div>
  <h2 style="text-align:center">Products</h2>
  <div id="items" class="container" style="background-color:whitesmoke; display:grid; grid-template-columns:repeat(auto-fill,minmax(250px,1.1fr)); gap: 1em; align-items:stretch; ">
<?php
    if (!$result) {
      exit;
    }
    if ($result->num_rows == 0) {
      return null;
    } else {
      $rowcount = $result->num_rows;
      while ($pdts = $result->fetch_assoc()) {
    ?>
        <div class="card" id="<?php echo $pdts['ProductID']; ?>" style="width: 16rem; margin-bottom:15px;" onclick="window.location='http://localhost/code/SEM%206/testing/bs4/item.php?ProductID=<?= $pdts['ProductID'] ?>';">
          <img class="card-img-top" style="height: 150px;" src="<?php echo $pdts["ProductImage"] ?>" alt="Card image cap">
          <div class="card-body">

            <p class="card-text">Name: <?php echo $pdts["ProductName"] ?></p>
            <!-- <p class="card-text">Quantity: <input type="text" class="quantity" id="qty" name="quantity" placeholder="1" size="4" /></p> -->
            <p class="card-text">Rate Per Unit: <?php echo $pdts["ProductPrice"] ?></br><div></div>
            <a href="cart.php" onclick='addtocart("<?php echo $pdts["ProductID"] ?>","<?php echo $pdts["ProductQuantity"] ?>","<?php echo $pdts["ProductPrice"] ?>","<?php echo $pdts["ProductName"] ?>");' class="btn btn-primary" style="width:100%">Add to Cart</a>
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