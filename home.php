<?php
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
    <link rel="stylesheet" href="home_style.css">

    <!-- bootstrap-css -->
    <link href="bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->


    <link type="fonts/css" rel="stylesheet" href="cm-overlay.css" />
    <!-- font-awesome icons -->
    <link href="fonts/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

<!-- banner --> <div class="w3layouts-banner-info">
    <div class="container">
        <div class="w3layouts-banner-slider">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="agileits-banner-info">
                                <h3>Get reliable help with your credit card processing needs</h3>
                                <p>An online service that matches you</p>
                            </div>
                        </li>
                        <li>
                            <div class="agileits-banner-info">
                                <h3>Accept Credit Cards On Your Smartphone Today!</h3>
                                <p> Right from your phone or tablet - and right away when you need to </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <script src="js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager:true,
                            nav:false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
                <!--banner Slider starts Here-->
            </div>
        </div>
    </div>
</div>

</div>
<!-- //banner -->

</body>
</html>

