<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

<body>

    <div class="container">
      <br>
      <div class="card">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="AddUsers.php">Customer</a></li>
        </ul>
      </div>

      <div class="card-header">
        <h3>Customer Information</h3>
      </div>
      <form action="AdminProcess.php" method="post">

      <div class="card-body">
        <div class="row">

          <div class="col-sm-11" style="background-color:lavender;" align="center"><br>
            <div class="row">
              <div class="col-sm-3"> <input type="text" class="form-control" name="Name" placeholder="Enter FullName" required> </div>
              <div class="col-sm-3"> <input type="email" class="form-control" name="Email" placeholder="Enter Email" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="Phone" placeholder="Enter PhoneNumber" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="add" placeholder="Enter Address" required></div>

              </br>
              </br><button type="submit" class="btn btn-success ml-4 my-2" align="center">Add Customer</button>
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