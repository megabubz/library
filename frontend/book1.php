
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- My Style Sheet --> 
        <title>Book1</title>

    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">The Amazing Library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Collection</a>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.php">My Accout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Portfolio Item Heading -->
            <h1 class="my-4">
                <small></small>
            </h1>

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-4">
                    <img class="img-fluid" src="image/thelostspells.jpg" alt="">
                </div>

                <div class="col-md-8">
                    <h2 class="my-3 font-weight-light">The Lost Spells</h2>
                    <h5 class="font-weight-light">Robert Macfarlane, Jackie Morris</h5>
                    <button name ="botton" onclick="mySunnyFunction()"><h7 class="font-weight-light">Borrow now (Sunny day)</h7></button>
                    <button name ="botton" onclick="myRainyFunction()"><h7 class="font-weight-light">Borrow now (Rainy day)</h7></button>
                    <br>
                    <h7 class="font-weight-light" id="demo"></h7>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <h3 class="my-4">You may also be interested in...</h3>

            <div class="row">

                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="image/thelostspells.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="image/thelostspells.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="image/thelostspells.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="image/thelostspells.jpg" alt="">
                    </a>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; The Amazing Library</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>
                  function mySunnyFunction() {
                      var txt;
                      if (confirm("Are you sure you want to borrow this!")) {
                          txt = "Success! This book will be available to pick up from the Amazing Library from tomorrow.";
                      } else {
                          txt = "You pressed Cancel!"
                      }
                      document.getElementById("demo").innerHTML = txt;
                  }
                  function myRainyFunction() {
                      var txt;
                      if (confirm("Are you sure you want to borrow this!")) {
                          txt = "Oops!It's currently unavailable. Please contact our customer team to join the waiting list!";
                      } else {
                          txt = "You pressed Cancel!"
                      }
                      document.getElementById("demo").innerHTML = txt;
                  }
        </script>
    </body>

</html>
