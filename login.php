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

    /* .wrapper {
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8)), url(../img/bg2.png);
            background-size:cover;
            background-position:unset;
            height: 700px;
        } */
</style>

<body style="background-color: lightgray;">
    <div class="wrapper">
        <div class="container bg-light mt-5 mb-5" style="height:38rem; padding:40px; border-radius:25px;">
            <!--here we can set height and padding of container.-->
            <h2><strong><u>Login Form</u></strong></h2>
            <hr>
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="uname">E-mail:</label>
                    <input type="text" class="form-control" id="mail" pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" placeholder="Enter username" name="mail" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid Input.</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*,.]{8,15}$" placeholder="Enter password" name="pswd" required>
                    <small>Password must have 7 to 15 characters which contain at least one numeric digit and a special character.</small>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please enter valid Password.</div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> I agree <a href="">Terms & Conditions</a>.
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> <small>New Customer...? <a href="signup.php">Click here </a>to register yourself</small>
            </form>
        </div>

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