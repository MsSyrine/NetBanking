<?php

include "navbar.php";
include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="news_style.css">

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

  <div class="flex-container">



                <!-- news -->
                <div class="news" id="news">
                    <div class="container">
                        <div class="w3-welcome-heading">
                            <h3>News & Events</h3>
                        </div>
                        <div class="w3ls-news-grids">
                            <div class="news-right">
                                <div class="col-md-4 news-right-grid">
                                    <div class="agile-news-info">
                                        <img src="images/n1.jpg" alt=" " class="img-responsive">
                                        <h4><a href="#" data-toggle="modal" data-target="#myModal">Euro zone budget likely to play stabilizing role: Moscovici WASHINGTON (Reuters) </a></h4>
                                        <span>19th March | 10:00 - 12:00</span>
                                        <p> - A future euro zone budget will soon have to take on the task of
                                            cushioning economic shocks despite current resistance from countries in northern Europe,
                                            a top European Union official said on Saturday.</p>
                                        <div class="agileinfo-news-button">
                                            <a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal">More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 news-right-grid">
                                    <div class="agile-news-info">
                                        <img src="images/n2.jpg" alt=" " class="img-responsive">
                                        <h4><a href="#" data-toggle="modal" data-target="#myModal">Global finance officials say risks to growth skewed to downside  economic growth</a></h4>
                                        <span>24th Sept | 09:00 - 11:00</span>
                                        <p>  Global financial officials on Saturday said risks to worldwide
                                            economic growth were "tilted to the downside" due to factors such as trade tensions, policy
                                            uncertainty and the sudden tightening </p>
                                        <div class="agileinfo-news-button">
                                            <a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal">More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 news-right-grid">
                                    <div class="agile-news-info">
                                        <img src="images/n3.jpg" alt=" " class="img-responsive">
                                        <h4><a href="#" data-toggle="modal" data-target="#myModal">Russia, OPEC may ditch oil deal to fight for market share: Russian minister</a></h4>
                                        <span>04th Oct | 12:00 - 02:00</span>
                                        <p> Russia and OPEC may decide to boost production to fight for market share with the
                                           US but this would push oil prices as low as $40 per barrel,
                                            TASS news agency сited Russia's Finance Minister  as saying on Saturday.</p>
                                        <div class="agileinfo-news-button">
                                            <a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal">More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!-- modal -->
                        <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title"><span>Banking</span></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="agileits-w3layouts-info">
                                            <img src="images/g2.jpg" alt="" />
                                            <p>European Commissioner for Economic and Financial Affairs Pierre Moscovici said the setting up of the limited "budgetary instrument for convergence and competitiveness for the euro area", as agreed by EU leaders last December, was only the first step in creating a more developed budget.

                                                "This is the first step, a foot in the door," Moscovici told Reuters in an interview on the sidelines of the International Monetary Fund and World Bank spring meetings in Washington.

                                                "We need an instrument that is also capable of addressing asymmetric shocks, to create convergence and that can also have a stabilization function," he said.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //modal -->
                    </div>
                </div>
                <!-- //news


                -->




    </div>

</body>
</html>