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

<!-- news -->
<div class="news" id="news">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>News and Events</h3>
        </div>


        <?php
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }


        $sql0 = "SELECT id, title, created,body FROM news ";
        $result = $conn->query($sql0);

        if ( $result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];

                $title=$row["title"];
                $date= date("d/m/Y", strtotime($row["created"]));
                $body=$row["body"];


                ?>

                <div class="w3ls-news-grids">
                    <div class="news-right">
                        <div class="col-md-4 ">
                            <div class="agile-news-info">
                                <img src="images/10.jpg" alt=" " class="img-responsive">
                                <h1 id="title"><?php echo $title  . "<br>"; ?></h1>
                                <span><?php echo "Date : " .
                                        $date ?></span>
                                <p>
                                <p id="news_body"><?php echo $body ?></p>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="agile-news-info">
                                <img src="images/4.jpg" alt=" " class="img-responsive">
                                <h1 id="title"><?php echo $title  . "<br>"; ?></h1>
                                <span><?php echo "Date : " .
                                        $date ?></span>
                                <p>
                                <p id="news_body"><?php echo $body ?></p>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="agile-news-info">
                                <img src="images/1.jpg" alt=" " class="img-responsive">
                                <h1 id="title"><?php echo $title  . "<br>"; ?></h1>
                                <span><?php echo "Date : " .
                                        $date ?></span>
                                <p>
                                <p id="news_body"><?php echo $body ?></p>

                            </div>
                        </div>




                        <div class="clearfix"></div>
                    </div>

                </div>




                <?php

            }

        }
        ?>







    </div>
</div>
<!-- //news -->
</body>
</html>