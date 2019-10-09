<?php
include './class/include.php';

$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

date_default_timezone_set('Asia/Colombo');
$today = date('Y-m-d');
$result = Helper::getDateBySinhala($today);
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Swasthi | Daily Horoscope</title>
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
        <style>
            .hs_kd_service_main_box_wrapper {
                height: 400px;
            }
        </style>
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
                            <h2>Daily Horoscope</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_right_wrapper">
                            <ul>
                                <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li>Daily Horoscope</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hs service wrapper Start -->
        <div class="hs_sign_main_wrapper">
            <!--<div class="hs_news_slider_bg_overlay"></div>-->
            <div class="container horoscope-section">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_shop_tabs_cont_sec_wrapper">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <!--<div class="row">-->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_kd_first_sec_wrapper">
                                        <h2><?php echo $result; ?> - අද දවස ඔබට කොහොමද?</h2>
                                        <h4><span></span></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                    $signs = Sign::all();
                                    $daily_details = DailyHoroscope::getHoroscopeDetailsByDate();
                                    foreach ($daily_details as $key => $details) {
                                        foreach ($signs as $key => $sign) {
                                            if ($sign['id'] == $details['sign']) {
                                                ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="div_<?php echo $key; ?>" tabindex="1">
                                                    <div class="hs_kd_service_main_box_wrapper">
                                                        <div class="hs_kd_service_inner_box_wrapper horoscope-box">
                                                            <div class="hs_kd_ser_img_wrapper horoscope-box">
                                                                <img src="images/sign/<?php echo $sign['image_name']; ?>" alt="sign_img" />
                                                            </div>
                                                            <div class="hs_kd_ser_img_cont_wrapper">
                                                                <h2><?php echo $sign['sin_name']; ?></h2>
                                                                <p><?php echo $details['description']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="sign-id" value="<?php echo $id; ?>" >
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
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/signs.js" type="text/javascript"></script>
        <!--main js file end-->
    </body>
</html>