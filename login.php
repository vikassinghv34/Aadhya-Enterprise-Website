<?php
// session_start();
include("header.php");
$message = "";
if (isset($_POST['submit'])) {

  require('conn.php');
  // $password = md5($_POST['pwd']);
  $username = $_POST['mail'];
  $password = $_POST['pwd'];
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $sql = "SELECT * FROM users WHERE UserEmail='$username' AND UserPassword='$password' AND UserEmailVerified='active'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['UserId'];
    $_SESSION['email'] = $row['UserEmail'];
    $_SESSION['name'] = $row['UserFirstName'];
    // header('Location:home.php');
    if($row['UserType'] === 'admin'){
      ?>
      <script>
        // location.replace("home.php");
        alert('admin');
      </script>
  <?php
    }else{
?>
    <script>
      location.replace("home.php");
    </script>
<?php
    }
  } else {
    $message = "invalid username or password";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

  .path a:hover {
    color: black;
    text-decoration: none;
  }

  .path a {
    color: gray;
  }

  .path .less {
    color: gray;
    font-weight: bolder;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
</style>

<body style="background-color: lightgray;">
  <div class="wrapper">
    <div class="container-fluid path">
      <a href="home.php">Home</a> <label for="" class="less">></label>
      <a href="login.php">Sign In</a>
    </div>
    <div class="container bg-light mt-5 mb-5" style="height:38rem; padding:40px; border-radius:25px;">
      <!--here we can set height and padding of container.-->
      <h2><strong><u>Login Form</u></strong></h2>
      <hr>
      <div>
        <p class="bg-success text-white px-4">
          <?php
          if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
          } else {
            // $_SESSION['msg'] = "You are logged out, please login again";
          }
          ?>
        </p>
      </div>
      <form action="" method="POST" class="needs-validation" novalidate>
        <div class="message" style="color: red; font-weight:bold;">
          <?php if ($message != "") {
            echo $message;
          } ?>
        </div>
        <div class="form-group">
          <label for="uname">E-mail:</label>
          <input type="text" class="form-control" id="mail" pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" placeholder="Enter username" name="mail" required autofocus>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please enter valid Email.</div>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*,.]{8,15}$" placeholder="Enter password" name="pwd" required>
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
        <button type="submit" name="submit" class="btn btn-primary">Submit</button> <small>New Customer...? <a href="signup.php">Click here </a>to register yourself</small>
        <br>
        <small><a href="forgot.php">Forgot Password</a></small>
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