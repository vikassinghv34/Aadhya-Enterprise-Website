<?php
include('header.php');

if(isset($_POST['submit']))
{
    include('conn.php');
    $username = $_POST['mail'];
    $username = mysqli_real_escape_string($conn, $username);
    $sql = "SELECT UserVerificationCode FROM users WHERE UserEmail='$username'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query); // fetch data

    $token=$row['UserVerificationCode'];
    if ($query) {

        $subject = "Email Activation";
        $body = "Hi, $fname. Click the link to reset your account password http://localhost/code/SEM%206/testing/bs4/reset.php?token=$token";
        $sender_email = "From: palak.chauhan0711@gmail.com";

        if (mail($username, $subject, $body, $sender_email)) {
            $_SESSION['msg'] = "Check your email to reset your account $email password";
            // header("location:login.php");
?>
            <script>
                location.replace("login.php");
            </script>
<?php
        } else {
            echo "Email sending failed..";
        }

        exit();
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container bg-light mt-5 mb-5" style=" padding:40px; border-radius:25px;">

        <h2><strong><u>Reset Password</u></strong></h2>
        <hr>
        <form action="" method="POST" class="needs-validation" novalidate>
            <!-- <div class="message" style="color: red; font-weight:bold;">
                <?php if ($message != "") {
                    echo $message;
                } ?>
            </div> -->
            <div class="form-group">
                <label for="uname">E-mail:</label>
                <input type="text" class="form-control" id="mail" pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" placeholder="Enter username" name="mail" required autofocus>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Input.</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
    <?php include('footer.php') ?>
</body>

</html>