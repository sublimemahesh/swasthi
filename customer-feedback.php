<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Swasthi | Customer Feedback</title>
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
        <link href="guest-comments-form/style.css" rel="stylesheet" type="text/css"/>
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
                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-6 full_width">
                        <div class="hs_indx_title_left_wrapper">
                            <h2>Customer Feedback</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-6 full_width">
                        <div class="hs_indx_title_right_wrapper">
                            <ul>
                                <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li>Customer Feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs_contact_indx_form_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_about_heading_main_wrapper">
                            <div class="hs_about_heading_wrapper">
                                <h2>Add <span>Customer Feedback</span></h2>
                                <h4><span></span></h4>
                                <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>-->
                            </div>
                        </div>
                    </div>
                    <form id="guestcomment" name="guestcomment" method="post">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Full Name</label>
                                <input type="text" class="form-control" id="txtFullName" placeholder="Your Full Name" name="txtFullName">
                                <span id="spanFullName"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Title</label>
                                <input type="text" class="form-control" id="txtTitle" placeholder="Your Title" name="txtTitle">
                                <span id="spanTitle"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Image Name</label>
                                <input type="file" class="form-control" name="txtProfileImg" id="txtProfileImg" placeholder="Your Image">
                                <span id="spanProfileImg"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Comment</label>
                                <textarea rows="6" class="form-control" name="txtComment" id="txtComment" placeholder="Your Comment"></textarea>
                                <span id="spanComment"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 captcha">
                            <div class="hs_kd_six_sec_input_wrapper form-group user-url">
                                <input class="form-control" placeholder="Security Code" name="captchacode" id="captchacode" >
                                <span id="capspan"></span>
                            </div>
                        </div>
                        <div class="col-md-3  col-sm-6">
                            <div class="form-group">
                                <?php
                                include ("./guest-comments-form/captchacode-widget.php");
                                ?>
                                <img id="checking" src="guest-comments-form/img/checking.gif" alt=""/>
                            </div>
                        </div>
                        <!--<button id="btnSubmit" class="hs_btn_hover submit Form btn-contact send-button">Send a Message</button>-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="response"></div>

                            <div class="hs_contact_indx_form_btn">
                                <ul>
                                    <li>
                                        <input type="hidden" name="btn-comment" value="contact">
                                        <button type="button" id="btnSubmit" class="hs_btn_hover submit Form btn-contact send-button">Send a Message</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 contact-us-button">
                            <div id="dismessage" align="center" class="msg-success" ></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- hs service wrapper Start -->
        <div class="hs_testi_slider_main_wrapper customer-feedback">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_about_heading_main_wrapper">
                            <div class="hs_about_heading_wrapper">
                                <h2>View <span>Customer Feedback</span></h2>
                                <h4><span></span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_testi_slider_wrapper">
                            <?php
                            $FEEDBACKS = Comments::activeComments();
                            if (count($FEEDBACKS) > 0) {
                                foreach ($FEEDBACKS as $key => $feedback) {
                                    ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="hs_testi_cont_main_wrapper">
                                                <div class="hs_testi_cont_inner_wrapper">
                                                    <div class="hs_testi_quote_cont_wrapper">
                                                        <p><?php echo $feedback['comment']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="hs_testi_client_main_wrapper">
                                                <div class="hs_testi_client_cont_sec">
                                                    <h2><?php echo $feedback['name']; ?></h2>
                                                    <p><?php echo $feedback["title"]; ?></p>
                                                </div>
                                                <div class="hs_testi_client_cont_img_sec">
                                                    <img src="upload/comments/thumb/<?php echo $feedback["image_name"]; ?>" alt="testi_img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                
                            }
                            ?>



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
        <script src="js/create-guest-comment.js" type="text/javascript"></script>
        <!--main js file end-->
    </body>
</html>