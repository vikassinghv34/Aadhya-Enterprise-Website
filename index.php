<?php
// session_start();
include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    $(document).ready(function() {
      $('#demo').carousel({
        interval: 3000
      })
    });
  </script>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

    .dropdown-divider {
      margin-top: 0;
      margin-bottom: 0;
    }

    .dropdown-item:hover {
      background-color: lightslategray;
      color: #ddd;
    }

    .column {
      float: left;
      width: 22%;
      padding: 10px;
      height: auto;
      /* Should be removed. Only for demonstration */
      margin: 5px;
      background-color: blue;

    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .products h2 {
      color: white;
      font-size: 2vw;
    }

    .container a {
      text-decoration: none;
    }
    .carousel-img{
      height: 700px;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="container-fluid mt-2">
    <div class="header">
      <?php
      if (isset($_SESSION['email'])) {
      ?>
        <h3><strong>Welcome
            <!--#display doner's name using session --><span style="text-transform: uppercase;"><?php echo $_SESSION['name']; ?></span>
          </strong></h3>
      <?php
      } else echo "<h6>Please login first .</h6>";
      ?>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/1.jpg" class="carousel-img mb-1" alt="Los Angeles" >
        </div>
        <div class="carousel-item">
          <img src="./pipes/agriculture-1.png" class="carousel-img" alt="Chicago" >
        </div>
        <div class="carousel-item">
          <img src="./pipes/agriculture_circleimg_2.png" class="carousel-img" alt="New York" >
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon" style="height: 50px; width:50px;"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon" style="height: 50px; width:50px;"></span>
      </a>
    </div>
  </div>
  <!-- what define astral -->
  <div class="container" id="about" style="height: auto;">
    <h3 align="center" style="margin: 10px;  margin-top:3%; margin-bottom:3%; color:#0297e0;"><strong><u>What Define Us</u></strong></h3>
    <div class="card-deck" style="margin-bottom: 5px; margin-top:5px;">
      <div class="card bg-primary">
        <div class="card-body text-center">
          <h3 class="card-header"><strong>Quality</strong></h3>
          <p class="card-text">We constantly strives to upgrade processes and materials, incorporating international developments in the plumbing industry to benefit the customers.</p>
        </div>
      </div>
      <div class="card bg-warning">
        <div class="card-body text-center">
          <h3 class="card-header"><strong>Trust</strong></h3>
          <p class="card-text">Trust
            We aims to achieve the vision of earning consumers’ trust and delight. Astral has been operational in India since 1996, striving to serve consumers to the best of their abilities.</p>
        </div>
      </div>
      <div class="card bg-success">
        <div class="card-body text-center">
          <h3 class="card-header"><strong>Innovation</strong></h3>
          <p class="card-text">We offers innovative product designs, created using extensive industry know-how coupled with the latest technology to assure world-class quality.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- products -->
  <h2 align="center" style="margin: 10px; color:#0297e0; margin-top:3%; margin-bottom:3%;"><strong><u>Products</u></strong></h2>

  <section id="products" class="products">
    <div class="container mb-3" style="display: grid; grid-template-columns:repeat(3,minmax(20%,1fr)); gap:0.3em;">
      <a href="products.php?ProductCategoryID=1">
        <div class="d-flex" style="background-color:#0060ae;">
          <div class="p-2">
            <img src="./gif/anim-icon1.gif" alt="loading" height="" width="100%">
          </div>
          <div class="p-2">
            <h2>Plumbing</h2>
          </div>
        </div>
      </a>
      <a href="products.php?ProductCategoryID=2">
        <div class="d-flex" style="background-color:#0046ae;">
          <div class="p-2">
            <img src="./gif/anim-icon2.gif" alt="loading" height="" width="100%">
          </div>
          <div class="p-2">
            <h2>Industrial</h2>
          </div>
        </div>
      </a>
      <a href="products.php?ProductCategoryID=3">
        <div class="d-flex" style="background-color:#0096ff;">
          <div class="p-2">
            <img src="./gif/anim-icon3.gif" alt="loading" height="" width="100%">
          </div>
          <div class="p-2">
            <h2>Agricultural</h2>
          </div>
        </div>
      </a>
      <a href="products.php?ProductCategoryID=4">
        <div class="d-flex" style="background-color:#126aee;">
          <div class="p-3">
            <img src="./gif/anim-icon4.gif" alt="loading" height="" width="100%">
          </div>
          <div class="p-2">
            <h2>Surface Drainage</h2>
          </div>
        </div>
      </a>
      <div class="d-flex" style="background-color:#053987;">
        <a href="products.php?ProductCategoryID=5">
          <div class="p-4">
            <img src="./gif/anim-icon5.gif" alt="loading" height="" width="100%">
          </div>
        </a>
        <div class="p-2">
          <h2>Sewerage & Drainage</h2>
        </div>

      </div>
      <div class="d-flex" style="background-color:#00c0ff;">
        <a href="products.php?ProductCategoryID=6">
          <div class="p-2">
            <img src="./gif/anim-icon6.gif" alt="loading" height="" width="100%">
          </div>
        </a>
        <div class="p-2">
          <h2>Fire Protection</h2>
        </div>
      </div>

      <div class="d-flex" style="background-color:#0052cc;">
        <a href="products.php?ProductCategoryID=7">
          <div class="p-2">
            <img src="./gif/anim-icon7.gif" alt="loading" height="" width="100%">
          </div>
        </a>
        <div class="p-2">
          <h2>Insulation</h2>
        </div>
      </div>

      <div class="d-flex" style="background-color:#0c5692;">
        <a href="products.php?ProductCategoryID=8">
          <div class="p-2">
            <img src="./gif/anim-icon8.gif" alt="loading" height="" width="100%">
          </div>
        </a>
        <div class="p-2">
          <h2>Cable Protection</h2>
        </div>
      </div>
      <div class="d-flex" style="background-color:#0096ff;">
        <a href="products.php?ProductCategoryID=9">
          <div class="p-2">
            <img src="./gif/anim-icon9.gif" alt="loading" height="" width="100%">
          </div>
        </a>
        <div class="p-2">
          <h2>Urban Infrastructure</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- product carousel -->
  <section id="product carousel">
    <div class="container mt-5 mb-5">
      <!-- product carousel -->
      <h3 align="center" style="margin: 10px; color:#0297e0; margin-top:3%; margin-bottom:3%;"><strong><u>Products Range</u></strong></h3>

      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=1" class="thumbnail"><img src="./pipes/Plumbing/Compact Ball valve.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=1" class="thumbnail"><img src="./pipes/Plumbing/CPVC PIPES.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=1" class="thumbnail"><img src="./pipes/Plumbing/SWR Pipes with Integrated Rings.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <div class="carousel-caption" style="color: black; font-weight:bolder">
              <h3><strong>Plumbing</strong></h3>
              <p>Pipes & Fitting</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=2" class="thumbnail"><img src="./pipes/Industrial/uPVC Plumbing pipe.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=2" class="thumbnail"><img src="./pipes/Industrial/HDPE Pipe.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=2" class="thumbnail"><img src="./pipes/Industrial/uPVC Casing Pipe.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <div class="carousel-caption" style="color: white; font-weight:bolder">
              <h3><strong>Industrial</strong></h3>
              <p>Pipes & Fitting</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=3" class="thumbnail"><img src="./pipes/agriculture_circleimg_2.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=3" class="thumbnail"><img src="./pipes/agriculture/Shallow well pump.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="products.php?ProductCategoryID=3" class="thumbnail"><img src="./pipes/agriculture-1.png" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <div class="carousel-caption" style="color: Black; font-weight:bolder">
              <h3><strong>Agricultural</strong></h3>
              <p>Pipes & Fitting</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon" style="height: 25px; width:25px;"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon" style="height: 25px; width:25px;"></span>
        </a>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>
</body>

</html>