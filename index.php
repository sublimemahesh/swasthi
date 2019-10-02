<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
    <!--[endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Swasthi</title>
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
        <link rel="stylesheet" type="text/css" href="css/sign_flaticon.css" />
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
        <!-- Slider Start -->
        <?php include 'slider.php'; ?>
        <!-- Slider End -->
        <div class="hs_title_main_wrapper">

            <div class="container">
                <div class="row">
                    <?php
                    $services = Service::all();
                    if (count($services) > 0) {
                        foreach ($services as $key => $service) {
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="hs_title_box_main_wrapper">
                                    <div class="hs_title_img_wrapper">
                                        <img src="upload/service/thumb2/<?php echo $service["image_name"]; ?>" alt="totle_img">
                                        <ul>
                                            <?php
                                            if ($service["price"] != 0) {
                                                ?>
                                                <li>Rs.<?php echo $service["price"] . '/='; ?></li>
                                                <?php
                                            } else {
                                                ?>
                                                <li>Free</li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                    <div class="hs_title_img_cont_wrapper">
                                        <h2><a href="view-services.php?id=<?php echo $service["id"]; ?>"><?php echo $service["title"]; ?></a></h2>
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
        <div class="hs_latest_news_main_wrapper">
            <!--<div class="hs_news_slider_bg_overlay"></div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_about_heading_main_wrapper">
                            <div class="hs_about_heading_wrapper">
                                <h2>About <span>Swasthi</span></h2>
                                <h4><span></span></h4>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hs_about_left_img_wrapper">
                            <img src="images/content/about_img.jpg" alt="about_img" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hs_about_right_cont_wrapper">
                            <h2>HoroScope Revels The Will Of God</h2>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu
                                ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p>
                            <h3>Contact Us</h3>
                            <h1>+94 77 789 7990</h1>
                            <div class="hs_effect_btn hs_about_btn">
                                <ul>
                                    <li><a href="about.php" class="hs_btn_hover">Read more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hs about ind wrapper End -->
        <!-- hs sign wrapper Start -->
        <div class="hs_sign_main_wrapper">
            <div class="hs_news_slider_bg_overlay"></div>
            <div class="container">
                <div class="hs_sign_heading_wrapper">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Daily <span>Horoscope</span></h2>
                            <h4><span></span></h4>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                        </div>
                    </div>
                </div>
                <div class="hs_sign_center_wrapper visible-xs visible-sm">
                    <div class="hs_cycle_main_wrapper">
                        <div class="hs_cycle_img">
                            <img src="images/content/cycle.jpg" alt="circle_img">
                            <span class="pulse"></span>
                            <div class="hs_tab_shap1">
                                <a href="#">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-taurus-astrological-sign-symbol"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap2">
                                <a href="#">
                                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-aries-sign"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap3">
                                <a href="#">
                                    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-libra"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap4">
                                <a href="#">
                                    <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-scorpio"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap5">
                                <a href="#">
                                    <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-leo"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap6">
                                <a href="#">
                                    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-capricorn"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap7">
                                <a href="#">
                                    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-aquarius-zodiac-sign-symbol"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap8">
                                <a href="#">
                                    <svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-gemini-zodiac-sign-symbol"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap9">
                                <a href="#">
                                    <svg version="1.1" id="Layer_9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-virgo-astrological-symbol-sign"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap10">
                                <a href="#">
                                    <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-leo"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap11">
                                <a href="#">
                                    <svg version="1.1" id="Layer_11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-cancer"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap12">
                                <a href="#">
                                    <svg version="1.1" id="Layer_12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-gemini-zodiac-sign-symbol"></i></p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="hs_sign_left_wrapper">
                    <div class="row">
                        <?php
                        foreach (Sign::all() as $key => $sign) {
                            $class = "";
                            if ($key != 0) {
                                $class = "hs_sign_left_tabs_wrapper_2";
                            }
                            if ($key < 6) {
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_sign_left_tabs_wrapper <?php echo $class; ?> hs_sign_left_tabs_border_wrapper<?php echo $key + 1; ?>">
                                        <div class="hs_slider_tabs_icon_wrapper">

                                            <a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class="hs_tabs_btn"><img class="sign-icon" src="images/sign/<?php echo $sign['image_name']; ?>" alt=""/></a>
                                        </div>
                                        <div class="hs_slider_tabs_icon_cont_wrapper">
                                            <ul>
                                                <li><a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class="hs_tabs_btn"><?php echo $sign['sin_name']; ?></a></li>
                                                <li><a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class=""><?php echo $sign['eng_name']; ?></a></li>
                                            </ul>
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="hs_sign_right_wrapper visible-xs">
                    <div class="row">
                        <?php
                        foreach (Sign::all() as $key => $sign) {
                            if ($key > 5) {
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_border_wrapper1">
                                        <div class="hs_slider_tabs_icon_wrapper">
                                            <a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class="hs_tabs_btn"><img class="sign-icon" src="images/sign/<?php echo $sign['image_name']; ?>" alt=""/></a>
                                        </div>
                                        <div class="hs_slider_tabs_icon_cont_wrapper">
                                            <ul>
                                                <li><a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class="hs_tabs_btn"><?php echo $sign['sin_name']; ?></a></li>
                                                <li><a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class=""><?php echo $sign['eng_name']; ?></a></li>
                                            </ul>
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="hs_sign_center_wrapper hidden-sm hidden-xs">
                    <div class="hs_cycle_main_wrapper">
                        <div class="hs_cycle_img">
                            <img src="images/content/cycle.jpg" alt="circle_img">
                            <span class="pulse"></span>
                            <div class="hs_tab_shap1">
                                <a href="#">
                                    <svg version="1.1" id="Layer_13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-taurus-astrological-sign-symbol"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap2">
                                <a href="#">
                                    <svg version="1.1" id="Layer_14" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-aries-sign"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap3">
                                <a href="#">
                                    <svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-libra"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap4">
                                <a href="#">
                                    <svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-scorpio"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap5">
                                <a href="#">
                                    <svg version="1.1" id="Layer_17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-sagittarius-arrow-sign"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap6">
                                <a href="#">
                                    <svg version="1.1" id="Layer_18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-capricorn"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap7">
                                <a href="#">
                                    <svg version="1.1" id="Layer_19" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-aquarius-zodiac-sign-symbol"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap8">
                                <a href="#">
                                    <svg version="1.1" id="Layer_20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-pisces-astrological-sign"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap9">
                                <a href="#">
                                    <svg version="1.1" id="Layer_21" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-virgo-astrological-symbol-sign"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap10">
                                <a href="#">
                                    <svg version="1.1" id="Layer_22" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-leo"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap11">
                                <a href="#">
                                    <svg version="1.1" id="Layer_23" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-cancer"></i></p>
                                </a>
                            </div>
                            <div class="hs_tab_shap12">
                                <a href="#">
                                    <svg version="1.1" id="Layer_24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="68.811px" height="64.729px" viewBox="0 0 68.811 64.729" enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                                          c0,0-30.278-18.234-68.054-17.929L0,52.763z"/>
                                    </svg>
                                    <p><i class="flaticon-gemini-zodiac-sign-symbol"></i></p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="hs_sign_right_wrapper hidden-xs">
                    <div class="row">
                        <?php
                        foreach (Sign::all() as $key => $sign) {
                            $class = "";
                            if ($key != 6) {
                                $class = "hs_sign_left_tabs_wrapper_2";
                            }
                            if ($key > 5) {
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_sign_left_tabs_wrapper <?php echo $class; ?> hs_sign_right_tabs_border_wrapper<?php echo $key - 5; ?>">
                                        <div class="hs_slider_tabs_icon_wrapper">
                                            <a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class="hs_tabs_btn"><img class="sign-icon" src="images/sign/<?php echo $sign['image_name']; ?>" alt=""/></a>
                                        </div>
                                        <div class="hs_slider_tabs_icon_cont_wrapper">
                                            <ul>
                                                <li><a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class="hs_tabs_btn"><?php echo $sign['sin_name']; ?></a></li>
                                                <li><a href="view-daily-horoscope.php?id=<?php echo $key+1; ?>" class=""><?php echo $sign['eng_name']; ?></a></li>
                                            </ul>
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs_latest_news_main_wrapper">
            <!--<div class="hs_news_slider_bg_overlay"></div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_about_heading_main_wrapper">
                            <div class="hs_about_heading_wrapper">
                                <h2> <span> Blog</span></h2>
                                <h4><span></span></h4>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $blogs = Blog::all();
                    foreach ($blogs as $key => $blog) {
                        if ($key < 3) {
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-box">
                                <a href="view-blog.php?id=<?php echo $blog['id']; ?>">
                                    <div class="hs_lest_news_box_wrapper">
                                        <div class="hs_lest_news_img_wrapper">
                                            <img src="upload/blog/thumb/<?php echo $blog['image_name']; ?>" alt="blog_img">
                                            <div class="hs_lest_news_date_wrapper">
                                                <?php
                                                $day = date('d', strtotime($blog['created_at']));
                                                $month = date('M', strtotime($blog['created_at']));
                                                ?>
                                                <ul>
                                                    <li><?php echo $day; ?></li>
                                                    <li><?php echo $month; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hs_lest_news_cont_wrapper">
                                            <h5><?php echo substr($blog['title'], 0, 20) . '...'; ?></h5>
                                            <p><?php echo substr($blog['description'], 0, 150) . '...'; ?></p>
                                            <h4>Read More <i class="fa fa-long-arrow-right"></i></h4>
                                        </div>
                                        <div class="hs_lest_news_cont_bottom">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="hs_sign_main_wrapper">
            <div class="hs_news_slider_bg_overlay"></div>
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="hs_about_heading_main_wrapper">
                            <div class="hs_about_heading_wrapper">
                                <h2>Customer <span> Feedback</span></h2>
                                <h4><span></span></h4>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_testi_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <?php
                                $comments = Comments::all();
                                if (count($comments) > 0) {
                                    foreach (array_chunk($comments, 2) as $comment_group) {
                                        ?>
                                        <div class="item">
                                            <div class="row">

                                                <?php
                                                foreach ($comment_group as $key => $comment) {
                                                    if ($key % 2 == 0) {
                                                        ?>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="hs_testi_cont_main_wrapper">
                                                                <div class="hs_testi_cont_inner_wrapper">
                                                                    <div class="hs_testi_quote_wrapper">
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </div>
                                                                    <div class="hs_testi_quote_cont_wrapper">
                                                                        <p><?php echo substr($comment["comment"], 0, 200) . '...'; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hs_testi_client_main_wrapper">
                                                                <div class="hs_testi_client_cont_sec">
                                                                    <h2><?php echo $comment["name"]; ?></h2>
                                                                    <p><?php echo $comment["title"]; ?></p>
                                                                </div>
                                                                <div class="hs_testi_client_cont_img_sec">
                                                                    <img src="upload/comments/thumb/<?php echo $comment["image_name"]; ?>" alt="testi_img" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                                            <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                                                <div class="hs_testi_cont_inner_wrapper">
                                                                    <div class="hs_testi_quote_wrapper">
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </div>
                                                                    <div class="hs_testi_quote_cont_wrapper">
                                                                        <p><?php echo substr($comment["comment"], 0, 200) . '...'; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                                                <div class="hs_testi_client_cont_img_sec">
                                                                    <img src="upload/comments/thumb/<?php echo $comment["image_name"]; ?>" alt="testi_img" />
                                                                </div>
                                                                <div class="hs_testi_client_cont_sec">
                                                                    <h2><?php echo $comment["name"]; ?></h2>
                                                                    <p><?php echo $comment["title"]; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                } else {
                                    echo "No comments in the database.";
                                }
                                ?>
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