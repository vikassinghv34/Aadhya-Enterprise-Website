<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
  <form action="AdminAddVendor.php" method="post">

    <div class="container ml-0">
      <br>

      <div class="card">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="AddVendors.php">Vendor</a></li>

        </ul>
      </div>

      <div class="card-header">
        <h3>Vendor Information
      </div>
      <div class="card-body">
        <div class="row">

          <div class="col-sm-12" style="background-color:lavender;" align="center"><br>
            <div class="row">
              <div class="col-sm-3"> <input type="text" class="form-control" name="UserName" placeholder="Enter UserName" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="FullName" placeholder="Enter FullName" required> </div>
              <div class="col-sm-3"> <input type="email" class="form-control" name="Email" placeholder="Enter Email" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="PhoneNumber" placeholder="Enter PhoneNumber" maxlength="10" required> </div>

              <br> <br><button type="submit" class="btn btn-success" align="center">Add Vendor</button>
            </div>

          </div>
        </div>
      </div>

    </div>


    </div>

  </form>
</body>
<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php"); ?>
</html>