<?php
session_start();
?>

<html>
    <head>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.bundle.min.js.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- My Style Sheet --> 
        <link href="css/signup.css" rel="stylesheet" type="text/css"/>

        <title>Register</title>
    </head>
    <body class="pricing">

        <div class="container ">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex">
                            <!-- Background image for card set in CSS! -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Register</h5>


                            <form action="" method="POST" class="form-signin">
                                <div class="form-label-group">
                                    <input type="text" id="inputFirstname" class="form-control" placeholder="First name" required autofocus>
                                    <label for="inputFirstname">Firstname</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" id="inputLastname" class="form-control" placeholder="Last name" required>
                                    <label for="inputLastname">Lastname</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Institution Email address" required>
                                    <label for="inputEmail">Institution Email address</label>
                                </div>             

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputConfirmPassword">Confirm password</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="date" id="inputDoB" class="form-control"  required>
                                    <label for="inputDoB">Date of Birth</label>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Sign up for the Amazing Library emails</label>
                                </div>                 

                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                                <hr class="my-4">
                                <div class='text-center'>
                                    <p class="font-weight-light">By signing up for email, you agree to receive the Amazing Library offers, promotions and other commercial messages. You may unsubscribe at any time.</p>
                                    <p class="font-weight-light">By creating an account, you agree to our Terms of Use and Privacy Policy </p>
                                </div>
                            </form>

                            <?php
                            if (!empty($_POST)) {
                                $_SESSION["inputFirstname"] = $_POST['inputFirstname'];
                                $_SESSION["inputLastname"] = $_POST['inputLastname'];
                                $_SESSION["inputPassword"] = $_POST['inputPassword'];
                                $_SESSION["inputEmail"] = $_POST['inputEmail'];
                                $_SESSION["inputDoB"] = $_POST['inputDoB'];
                                
                                 // if it's not empty, check against the database
                                
                            }

                            else {
                                
                                //check if it's empty, write a message that says you must fill all fields in
                                
                            }
                          
                            
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
