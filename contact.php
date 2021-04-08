<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>CONTACT US</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color: lightgray;">
  <div class="container bg-light mt-5 mb-5" style="height:40rem; padding:40px; border-radius:25px;">
    <h2><strong><u>Contact Us</u></strong></h2>
    <hr>
    <form action="/action_page.php" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" placeholder="Enter Email" name="email" required autofocus>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter valid E-mail address.</div>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="name" class="form-control" id="name" pattern="^[a-zA-Z].*" minlength="5" maxlength="20" placeholder="Enter Name" name="name" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter valid Input.</div>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" rows="5" minlength="50" placeholder="Enter your message" name="message" required></textarea>
        <small>Minimum 50 character are valid.</small>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter valid Input.</div>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <?php include('footer.php'); ?>
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

</html>