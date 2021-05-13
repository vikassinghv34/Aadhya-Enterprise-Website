<?php session_start(); ?>
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
        <script>
            $(document).ready(function() {
                $('.search-box input[type="text"]').on("keyup input", function() {
                    /* Get input value on change */
                    var inputVal = $(this).val();
                    var resultDropdown = $(this).siblings(".result");
                    if (inputVal.length) {
                        $.get("searchback.php", {
                            term: inputVal
                        }).done(function(data) {
                            // Display the returned data in browser
                            resultDropdown.html(data);
                            
                        });
                    } else {
                        resultDropdown.empty();
                    }
                });

                // Set search input value on click of result item
                $(document).on("click", ".result p", function() {
                    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                    $(this).parent(".result").empty();
                });
            });
        </script>
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
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        background-color: #fff;
    }
    .result p:hover{
        background: #f2f2f2;
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
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="cursor: pointer;" onclick="window.location='http://localhost/code/SEM%206/testing/bs4/products.php'" id="navbardrop" data-toggle="dropdown">
                    Products
                </a>
                <div class="dropdown-menu mt-0 bg-primary">
                    <a class="dropdown-item" href="products.php?ProductCategoryID=1">Plumbing</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=2">Industrial</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=3">Agricultural</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=4">Surface Drainage</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=5">Sewerage & Drainage</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=6">Fire Protection</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=7">Insulation</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=8">Cable Pretection</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="products.php?ProductCategoryID=9">Urban Infrastructure</a>
                </div>
            </li>

        </ul>
        
        <ul class="navbar-nav search-box">
                <input class="form-control mr-sm-2" type="text" placeholder="Search products here...">
                <div class="result"></div>
            
            <!-- </form> -->
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?php if (isset($_SESSION['email'])) { ?>
                    <a class="nav-link" id="trial" href="cart.php"><i class="fas fa-cart-arrow-down"></i> Cart</a>

                <?php } ?>
            </li>
            <li class="nav-item">
                <?php if (isset($_SESSION['email'])) { ?>
                    <a class="nav-link" id="trial" href="profile.php"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['name'] ?></a>
                <?php } else { ?>
                    <a class="nav-link" href="signup.php"><i class="fas fa-user-edit"></i> Sign Up</a>
                <?php } ?>
            </li>
            <li class="nav-item">
                <?php if (isset($_SESSION['email'])) { ?>
                    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i> Sign out</a>
                <?php } else { ?>
                    <a class="nav-link" href="login.php"><i class="fa fa-sign-in-alt"></i> Sign in</a>
                <?php } ?>
            </li>

        </ul>
    </nav>
</body>

</html>