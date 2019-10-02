<?php
include './class/include.php';
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
$SERVICE = new Service($id);
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Swasthi | <?php echo $SERVICE->title; ?></title>
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
                            <h2><?php echo $SERVICE->title; ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_right_wrapper">
                            <ul>
                                <li><a href="./">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li><a href="services.php">Services</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li><?php echo $SERVICE->title; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs_blog_categories_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="hs_blog_left_sidebar_main_wrapper">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_blog_box1_main_wrapper hs_blog_box2_main_wrapper">
                                        <div class="hs_blog_box1_img_wrapper">
                                            <!--<div class="owl-carousel owl-theme">-->
                                                        <div class="item">
                                                            <img src="upload/service/<?php echo $SERVICE->image_name; ?>">
                                                        </div>
                                            <!--</div>-->
                                        </div>
                                        <div class="hs_blog_box1_cont_main_wrapper">
                                            <div class="hs_blog_cont_heading_wrapper">
                                                <h2><?php echo $SERVICE->title; ?></h2>
                                                <h4><span></span></h4>
                                                <p><?php echo $SERVICE->description; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="hs_blog_right_sidebar_main_wrapper">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_blog_right_cate_list_heading_wrapper">
                                        <h2>Other Services</h2>
                                    </div>
                                    <?php
                                    $other_services = Service::getOtherServicesWithoutThisID($id);
                                    if (count($other_services) > 0) {
                                        foreach ($other_services as $service) {
                                            ?>
                                            <div class="hs_blog_right_recnt_cont_wrapper">
                                                <div class="hs_footer_ln_img_wrapper">
                                                    <a href="view-services.php?id=<?php echo $service["id"]; ?>">
                                                    <img src="upload/service/thumb/<?php echo $service["image_name"]; ?>" class="pull-left img-responsive other-img" alt="ln_img" />
                                                    </a>
                                                </div>
                                                <div class="hs_footer_ln_cont_wrapper">
                                                    <a href="view-services.php?id=<?php echo $service["id"]; ?>" title="<?php echo $service["title"]; ?>">
                                                        <h4 class="service-title"><?php echo substr($service["title"],0,40) . '...'; ?></h4></a>
                                                    <a href="view-services.php?id=<?php echo $service["id"]; ?>">
                                                        <h4 class="service-desc"><p><?php echo substr($service["short_description"], 0, 100) . '...'; ?></p></h4></a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "<h6>There are no any other services in the database.</h6>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
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
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/custom.js"></script>
        <!--main js file end-->
    </body>
</html>

