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
    *{
    padding: 0;
    margin: 0;    
}
p{
    padding: 0;
    margin: 0;
}
    </style>
<body style="background-color: lightgray;">
    <div class="container" style="height:40rem; padding:40px"><!--here we can set height and padding of container.-->
        <h2><strong><u>Login Form</u></strong></h2>
        <hr>
        <form action="/action_page.php" class="was-validated">
            <div class="form-group">
                <label for="uname">E-mail:</label> 
                <input type="text" class="form-control" id="mail"  pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" placeholder="Enter username" name="mail" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*,.]{8,15}$" placeholder="Enter password" name="pswd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
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


</body>

<div class="align-self-end">
    <?php include("footer.php") ?>
    </div>
</html>