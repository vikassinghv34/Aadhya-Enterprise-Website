<?php
session_start();
include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  </style>
</head>

<body>
  <div class="container-fluid mt-2">
    <div class="header">
      <?php
      if (isset($_SESSION['email'])) {
      ?>
        <h1><strong>Welcome
            <!--#display doner's name using session --><span style="text-transform: uppercase;"><?php echo $_SESSION["name"]; ?></span>
          </strong></h1>
      <?php
      }
       else echo "<h6>Please login first .</h6>";
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
          <img src="../img/1.jpg" alt="Los Angeles" style="height: 700px; width:100%;">
        </div>
        <div class="carousel-item">
          <img src="../img/2.jpg" alt="Chicago" style="height: 700px; width:100%;">
        </div>
        <div class="carousel-item">
          <img src="../img/4.jpg" alt="New York" style="height: 700px; width:100%;">
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
  <div class="container" style="height: auto;">
    <h1 align="center" style="margin: 10px;  margin-top:3%; margin-bottom:3%; color:#0297e0;"><strong><u>What define Astral</u></strong></h1>
    <div class="card-deck" style="margin-bottom: 5px; margin-top:5px;">
      <div class="card bg-primary">
        <div class="card-body text-center">
          <h2 class="card-header"><strong>Quality</strong></h2>
          <p class="card-text">ASTRAL constantly strives to upgrade processes and materials, incorporating international developments in the plumbing industry to benefit the customers.</p>
        </div>
      </div>
      <div class="card bg-warning">
        <div class="card-body text-center">
          <h2 class="card-header"><strong>Trust</strong></h2>
          <p class="card-text">Trust
            ASTRAL aims to achieve the vision of earning consumers’ trust and delight. Astral has been operational in India since 1996, striving to serve consumers to the best of their abilities.</p>
        </div>
      </div>
      <div class="card bg-success">
        <div class="card-body text-center">
          <h2 class="card-header"><strong>Innovation</strong></h2>
          <p class="card-text">ASTRAL offers innovative product designs, created using extensive industry know-how coupled with the latest technology to assure world-class quality.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- products -->
  <section id="products" class="products">
    <h1 align="center" style="margin: 10px; color:#0297e0; margin-top:3%; margin-bottom:3%;"><strong><u>Products</u></strong></h1>
    <div class="container mb-3" style="display: grid; grid-template-columns:repeat(3,minmax(20%,1fr)); gap:0.3em;">
      <a href="product.php">
        <div class="d-flex" style="background-color:#0060ae;">
          <div class="p-2">
            <img src="https://www.astralpipes.com/assets/images/anim-icon1.gif" alt="loading" height="" width="100%">
          </div>
          <div class="p-2">
            <h2>Plumbing</h2>
          </div>
        </div>
      </a>
      <a href="product.php">
        <div class="d-flex" style="background-color:#0046ae;">
          <div class="p-2">
            <img src="https://www.astralpipes.com/assets/images/anim-icon2.gif" alt="loading" height="" width="100%">
          </div>
          <div class="p-2">
            <h2>Industrial</h2>
          </div>
        </div>
      </a>
      <div class="d-flex" style="background-color:#0096ff;">
        <div class="p-2">
          <img src="https://www.astralpipes.com/assets/images/anim-icon3.gif" alt="loading" height="" width="100%">
        </div>
        <div class="p-2">
          <h2>Agricultural</h2>
        </div>
      </div>
      <div class="d-flex" style="background-color:#126aee;">
        <div class="p-2">
          <img src="https://www.astralpipes.com/assets/images/anim-icon4.gif" alt="loading" height="" width="100%">
        </div>
        <div class="p-2">
          <h2>Surface Drainage</h2>
        </div>
      </div>
      <div class="d-flex" style="background-color:#053987;">
        <div class="p-2">
          <img src="https://www.astralpipes.com/assets/images/anim-icon5.gif" alt="loading" height="" width="100%">
        </div>
        <div class="p-2">
          <h2>Sewerage & Drainage</h2>
        </div>
      </div>
      <div class="d-flex" style="background-color:#00c0ff;">
        <div class="p-2">
          <img src="https://www.astralpipes.com/assets/images/anim-icon6.gif" alt="loading" height="" width="100%">
        </div>
        <div class="p-2">
          <h2>Fire Protection</h2>
        </div>
      </div>
      <div class="d-flex" style="background-color:#0052cc;">
        <div class="p-2">
          <img src="https://www.astralpipes.com/assets/images/anim-icon7.gif" alt="loading" height="" width="100%">
        </div>
        <div class="p-2">
          <h2>Insulation</h2>
        </div>
      </div>
      <div class="d-flex" style="background-color:#0c5692;">
        <div class="p-2">
          <img src="https://www.astralpipes.com/assets/images/anim-icon8.gif" alt="loading" height="" width="100%">
        </div>
        <div class="p-2">
          <h2>Cable Protection</h2>
        </div>
      </div>
      <div class="d-flex" style="background-color:#0096ff;">
        <div class="p-2">
          <img src="https://www.astralpipes.com/assets/images/anim-icon9.gif" alt="loading" height="" width="100%">
        </div>
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
      <h1 align="center" style="margin: 10px; color:#0297e0; margin-top:3%; margin-bottom:3%;"><strong><u>Products Range</u></strong></h1>

      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/1.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/2.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/4.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <div class="carousel-caption" style="color: black; font-weight:bolder">
              <h3><strong>Plumbing</strong></h3>
              <p>Pipes & Fitting</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/6.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/4.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/5.jpeg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <div class="carousel-caption" style="color: black; font-weight:bolder">
              <h3><strong>Industrial</strong></h3>
              <p>Pipes & Fitting</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/6.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/4.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-4"><a href="#" class="thumbnail"><img src="../img/6.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <div class="carousel-caption" style="color: black; font-weight:bolder">
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