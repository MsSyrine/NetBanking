<?php
/**
 * Created by PhpStorm.
 * User: syrin
 * Date: 4/7/2019
 * Time: 5:04 PM
 */

    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login_style.css">
        <!-- bootstrap-css -->
        <link href="bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!--// bootstrap-css -->


        <link type="fonts/css" rel="stylesheet" href="cm-overlay.css" />
        <!-- font-awesome icons -->
        <link href="fonts/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome icons -->
        <!-- font -->
        <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- //font -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>

    <body>
    <!--login -->
    <div class="login" id="login">
        <div class="container">

            <div class="w3ls-about-grids">


                <div class="col-md-6 about-left">
                    <div class="flex-container-background">
                        <div class="flex-container">
                            <div class="flex-item-0">
                                <h1 id="form_header">Your Bank at Your Fingertips.</h1>
                            </div>
                        </div>

                        <div class="flex-container">
                            <div class="flex-item-1">
                                <form action="login_action.php" method="post">
                                    <div class="flex-item-login">
                                        <h2>Welcome</h2>
                                    </div>

                                    <div class="flex-item">
                                        <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                                    </div>

                                    <div class="flex-item">
                                        <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                                    </div>

                                    <div class="flex-item">
                                        <button type="submit">Login</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                     <h3> Not a member?  <a href="register.php">Register now</a> </h3>
                    </div>
                </div>

                <div class="col-md-6 about-right">
                    <img src="images/9.png" alt="">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //logint -->


    </body>
    </html>

