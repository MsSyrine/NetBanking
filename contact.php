<?php
    include "header.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact_style.css">

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

<!-- mail -->
<div class="mail" id="contact" >
    <div class="container">
        <h3 class="w3l-title"><span> </span>  </h3>
        <div class="mail-w3l-agile">
            <div class="col-md-6 col-sm-6 contact-left-w3ls">
                <div class="w3l-cont-mk">
                    <img src="images/img2.jpg">
                </div>
                <h3>Contact Info</h3>
                <div class="visit">
                    <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
                        <h4>Visit us</h4>
                        <p>Centre Urbain Nord ,Tunisia</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mail-w3">
                    <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
                        <h4>Mail us</h4>
                        <p><a href="mailto:info@example.com">netBank@example.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="call">
                    <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
                        <h4>Call us</h4>
                        <p>+18044261149</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 agileinfo_mail_grid_right">
                <h3>Get In Touch</h3>
                <form action="contact_action.php" method="post">
                    <div class="wthree_contact_left_grid">
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="text" name="number" placeholder="Phone Number" required="">
                    </div>
                    <textarea name="message" placeholder="Message......." required=""></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
</div>
<!-- //mail -->


</body>
</html>
