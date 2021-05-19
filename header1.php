<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
            
                
                <div class="sidebar-header">
                    <a href="index.php"><h3>Dashboard</h3></a>
                </div>

                <ul class="list-unstyled components">
                    
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Customers</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="AddUsers.php">Add Customer</a></li>
                            <li><a href="AdminManageUser.php">Manage Customer</a></li>
                          
                        </ul>
                    </li>
                  

                
                    
                    <li class="active">
                        <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false">Products</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu2">
                            <li><a href="AddItem.php">Add Product</a></li>
                            <li><a href="AdminManageItem.php">Manage Product</a></li>
                          
                        </ul>
                    </li>
                    

                    
                    
                    <li class="active">
                        <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false">Vendors</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu3">
                            <li><a href="AddVendors.php">Add Vendor</a></li>
                            <li><a href="AdminManageVendor.php">Manage Vendor</a></li>
                          
                        </ul>
                    </li>
                   

                    
                    
                    <li class="active">
                        <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false">Sales</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu4">
                            <li><a href="addsales.php">Add Sales</a></li>
                            <li><a href="sales.php">Manage Sales</a></li>
                          
                        </ul>
                    </li>

                    <li class="active">
                        <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false">Sales Reports</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu5">
                            <li><a href="salesdatereport.php">Sales by Date</a></li>

</ul>
</li>
                        <li class="active">
                        <a href="profile.php">My Profile</a>
                        </li>
                          
                        </ul>
                    </li>
                   
                        
                        

               
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
            
            

        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
