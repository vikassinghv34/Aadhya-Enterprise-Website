<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown:hover .dropdown-menu {
        display: block;

    }

    .dropdown:active {
        color: white;
    }

    .dropdown-item:hover {
        background-color: lightslategray;
        color: #ddd;
    }

    .hr {
        height: 2px;
        background-color: Blue;
        width: auto;
    }

    .dropdown-item {
        margin: 0;
    }

    .dropdown-divider {
        margin-top: 0;
        margin-bottom: 0;
    }
</style>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="home.php"><strong>AaDhYa EnTeRpRiSe</strong></a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Products
                </a>
                <div class="dropdown-menu mt-0 bg-primary">
                    <h5 class="dropdown-item">Plumbing Pipes & Fitting</h5>
                    <hr class="hr" style=" margin-top: 0;" />
                    <a class="dropdown-item" href="#">CPVC PRO</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Pex-a PRO</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Aquarius</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fa fa-sign-in-alt"></i> Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php"><i class="fas fa-sign-out-alt"></i> Sign Up</a>
            </li>
        </ul>
        <ul class="nav justify-content-end">
            <form class="navbar-form form-inline navbar-left" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </ul>
    </nav>
</body>

</html>