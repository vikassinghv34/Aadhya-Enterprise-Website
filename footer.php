<!DOCTYPE html>

<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #page-container {
            position: relative;
            min-height: 100%;
            /* max-height: 100%; */
        }

        #content-wrap {
            padding-bottom: 4.5rem;
            /* Footer height */
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 4.5rem;
            /* Footer height */
            background-color: lightslategray;
        }
    </style>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <!-- all other page content -->

        </div>
        <footer id="footer" class="bg-dark navbar-dark" style="padding: 20px;" align="center">
            <H5 style="color: whitesmoke;"><a href="#" style="color:lightskyblue;"> Copyright &copy;<script>
                        document.write(new Date().getFullYear())
                    </script></a> Aaradhya Enterprise All Rights Reserved</H5>
        </footer>
    </div>
    <!-- <div class="jumbotron text-center" style="margin-bottom:0">
    <H5><a href="#" style="color: blue;"> Copyright &copy;<script>document.write(new Date().getFullYear())</script></a> Aaradhya Enterprise All Rights Reserved</H5>
</div> -->
</body>

</html>