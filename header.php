<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a class="nav-link" href="#">Contact Us</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Pipes
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Agreculture</a>
                    <a class="dropdown-item" href="#">Domestic</a>
                    <a class="dropdown-item" href="#">HDPE</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
        </ul>
        <ul class="nav justify-content-end">
        <form class="navbar-form form-inline navbar-left" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>

        </form>
        </ul>
        <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul> -->

    </nav>


</body>

</html>