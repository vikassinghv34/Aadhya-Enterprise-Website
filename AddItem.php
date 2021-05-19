<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>


<body>
  <form action="AddProcess.php"  method="post">
    <div class="container">


      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="AddItem.php">Product</a></li>

      </ul>
    </div>
    <br>
    <div class="card">
      <div class="card-header">
        <h3>Product Information</h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-sm-12" style="background-color:lavender;" align="center">
            <h2></h2><br>
            <div class="row">
              <div class="col-sm-3"> <input type="text" class="form-control" name="ProductName" placeholder="Enter Productname" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="ProductPrice" placeholder="Price" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="ProductCartDesc" placeholder="Cart Desc" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="ProductShortDesc" placeholder="Short Desc" required> </div></br></br>
              <div class="col-sm-3"> <input type="file" class="form-control" name="ProductImage" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="ProductCategoryID" placeholder="CategoryID" required> </div>



            </div>
            <br><button type="submit" class="btn btn-success" align="center">Add Product</button>
          </div>


        </div>

  </form>




  <script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
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