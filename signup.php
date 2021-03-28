<?php
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    p {
        padding: 0;
        margin: 0;
    }
</style>

<body style="background-color: lightgray;">
    <div class="container bg-light mt-5 mb-5" style="height:auto; padding:40px; border-radius:25px;">
        <!--here we can set height and padding of container.-->
        <h2><strong><u>Registration Form</u></strong></h2>
        <hr>
        <form action="/action_page.php" class="needs-validation" novalidate>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="fname" pattern="^[a-zA-Z ]{5,10}$" placeholder="Enter First name" name="fname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter valid Input.</div>
                    </div>
                    <div class="col">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" pattern="^[a-zA-Z]{5,10}$" onblur placeholder="Enter Last name" name="lname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter valid Input.</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone number" pattern="^\d{10}$" name="phone" required>
                <small>Phone number must have only 10 digits.</small>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Phone Number.</div>
            </div>
            <div class="form-group">
                <label for="mail">E-mail:</label>
                <input type="email" class="form-control" id="mail" placeholder="Enter e-mail address" pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" name="mail" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid E-mail address.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" id="pwd" class="form-control" aria-describedby="passwordHelpBlock" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*,.]{8,15}$" placeholder="Enter Password" name="pwd" required>
                <small>Password must have 7 to 15 characters which contain at least one numeric digit and a special character.</small>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Password.</div>
            </div>
            <div class="form-group">
                <label for="rpwd">Confirm Password:</label>
                <input type="password" id="rpwd" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter Password again" name="pwd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Input.</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> <small>Already have an account..? <a href="login.php">Sign in</a></small>
        </form>
    </div>
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

<div class="align-self-end">
    <?php include("footer.php") ?>
</div>

</html>