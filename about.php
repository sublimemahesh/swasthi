<?php
include './class/include.php';

$ABOUT = new Page(1);
$VISSION = new Page(2);
$MISSION = new Page(3);
$VALUE = new Page(4);
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Swasthi | About Us</title>
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
        <!-- hs About Title Start -->
        <div class="hs_indx_title_main_wrapper">
            <div class="hs_title_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_left_wrapper">
                            <h2>About Us</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_right_wrapper">
                            <ul>
                                <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs_kd_special_service_main_wrapper about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_kd_srrvice_main_wrapper">
                            <div class="hs_kd_service_heading_wrapper">
                                <h2>Swasthi <span></span></h2>
                                <h4><span></span></h4>
                                <p><?php echo $ABOUT->description; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="hs_kd_service_main_box_wrapper">
                            <div class="hs_kd_service_inner_box_wrapper">
                                <div class="hs_kd_ser_img_wrapper">
                                    <img src="upload/page/<?php echo $VISSION->image_name; ?>" class="company_importance" alt="service_img" />
                                </div>
                                <div class="hs_kd_ser_img_cont_wrapper">
                                    <h2>Vision</h2>
                                    <?php echo $VISSION->description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="hs_kd_service_main_box_wrapper">
                            <div class="hs_kd_service_inner_box_wrapper">
                                <div class="hs_kd_ser_img_wrapper">
                                    <img src="upload/page/<?php echo $MISSION->image_name; ?>" class="company_importance" alt="service_img" />
                                </div>
                                <div class="hs_kd_ser_img_cont_wrapper">
                                    <h2>Mission</h2>
                                    <?php echo $MISSION->description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="hs_kd_service_main_box_wrapper">
                            <div class="hs_kd_service_inner_box_wrapper">
                                <div class="hs_kd_ser_img_wrapper">
                                    <img src="upload/page/<?php echo $VALUE->image_name; ?>" class="company_importance" alt="service_img" />
                                </div>
                                <div class="hs_kd_ser_img_cont_wrapper">
                                    <h2>Value</h2>
                                    <?php echo $VALUE->description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--         <div class="hs_kd_earth_main_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="hs_kd_earth_img1_wrapper">
                                <div class="hs_kd_earth_img_overlay"></div>
                                <h2>How is this month for you?</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="hs_kd_earth_img2_wrapper">
                                <div class="hs_kd_earth_img_overlay"></div>
                                <h2>Perform a pooja to improve your life.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        <!-- footer Start -->
        <?php include 'footer.php'; ?>
        <!-- footer End -->
        <!--main js file start-->
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
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/custom.js"></script>
        <!--main js file end-->
    </body>
</html>