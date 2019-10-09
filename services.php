<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Swasthi | Services</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Horoscope" />
        <meta name="keywords" content="Horoscope" />
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320" />
        <!--srart theme style -->
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <!-- favicon links -->
        <link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
    </head>

    <body>
        <div class="stars"></div>
        <div class="twinkling"></div>
        <!-- preloader Start -->
        <div id="preloader">
            <div id="status"><img src="images/header/horoscope.gif" id="preloader_image" alt="loader">
            </div>
        </div>
        <!-- header Start -->
        <?php include 'header.php'; ?>
        <!-- header End -->
        <div class="hs_indx_title_main_wrapper">
            <div class="hs_title_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_left_wrapper">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_right_wrapper">
                            <ul>
                                <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs_service_main_wrapper">
            <div class="container">
                <div class="row">
                    <?php
                    $services = Service::all();
                    if (count($services) > 0) {
                        foreach ($services as $key => $service) {
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="hs_title_box_main_wrapper service-box">
                                    <div class="hs_title_img_wrapper">
                                        <img src="upload/service/thumb2/<?php echo $service["image_name"]; ?>" alt="totle_img">
                                    </div>
                                    <div class="hs_title_img_cont_wrapper">
                                        <h2>
                                            <a href="view-services.php?id=<?php echo $service["id"]; ?>">
                                                <?php
                                                if(strlen($service["title"]) > 90) {
                                                    echo substr($service["title"], 0, 71) . '...';
                                                } else {
                                                    echo $service["title"];
                                                }
                                                
                                                ?>
                                            </a>
                                        </h2>
                                        <p><?php echo substr($service["description"], 0, 160) . '...'; ?></p>
                                        <h5><a href="view-services.php?id=<?php echo $service["id"]; ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<h6>There are no any services in the database.</h6>";
                    }
                    ?>

                </div>
            </div>
        </div>

        <!-- footer Start -->
        <?php include 'footer.php'; ?>
        <!-- footer End -->
        <!--main js file start-->
        <script src="js/jquery_min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/jquery.menu-aim.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.shuffle.min.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.inview.min.js"></script>
        <!--<script src="js/jquery.magnific-popup.js"></script>-->
        <script src="js/custom.js"></script>
        <!--main js file end-->
    </body>
</html>