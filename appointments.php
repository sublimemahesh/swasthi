<?php
include './class/include.php';

$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Swasthi | Appointments</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Horoscope" />
        <meta name="keywords" content="Horoscope" />
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320" />
        <!--srart theme style -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <link href="contact-us-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/Timepicker/dist/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css"/>
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
                            <h2>Appointments</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_right_wrapper">
                            <ul>
                                <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li>Appointments</li>
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
                                <h2>Fill below form to make an <span>Appointment</span></h2>
                                <h4><span></span></h4>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Full Name</label>
                                <input type="text" class="form-control" id="txtFullName" placeholder="Your Full Name" name="full_name">
                                <span id="spanFullName"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="txtEmail" placeholder="Your Email">
                                <span id="spanEmail"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="txtContact" placeholder="Your Phone Number">
                                <span id="spanContact"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Date & Time</label>
                                <input type="text" class="form-control" name="date_and_time" id="txtDateAndTime" placeholder="Appointment Date & Time">
                                <span id="spanDateAndTime"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Service</label>
                                <select class="form-control" name="service" id="txtService">
                                    <?php
                                    foreach (Service::all() as $service) {
                                        if ($id == $service['id']) {
                                            ?>
                                            <option value="<?php echo $service['title']; ?>" selected><?php echo $service['title']; ?></option>
                                            <?php
                                        } else {
                                            ?>
                                            <option value="<?php echo $service['title']; ?>"><?php echo $service['title']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <span id="spanService"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Message</label>
                                <textarea rows="6" class="form-control" name="message" id="txtmessage" placeholder="Your Message"></textarea>
                                <span id="spanmessage"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 captcha">
                            <div class="hs_kd_six_sec_input_wrapper form-group user-url">
                                <input class="form-control" placeholder="Security Code" name="captchacode" id="captchacode" >
                                <span id="capspan"></span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <?php
                                include ("./appointment-form/captchacode-widget.php");
                                ?>
                                <img id="checking" src="appointment-form/img/checking.gif" alt=""/>
                            </div>
                        </div>
                        <!--<button id="btnSubmit" class="hs_btn_hover submit Form btn-contact send-button">Send a Message</button>-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="response"></div>

                            <div class="hs_contact_indx_form_btn">
                                <ul>
                                    <li>
                                        <input type="hidden" name="form_type" value="contact">
                                        <button type="button" id="btnSubmit" class="hs_btn_hover submit Form btn-contact send-button">Send an Appointment</button>
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


        <!-- footer Start -->
        <?php include 'footer.php'; ?>
        <!-- footer End -->
        <!--main js file start-->
        <!--main js file start-->
        <script src="js/jquery_min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        <script src="appointment-form/scripts.js" type="text/javascript"></script>
        <script src="plugins/Timepicker/dist/jquery-ui-sliderAccess.js" type="text/javascript"></script>
        <script src="plugins/Timepicker/dist/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
        <!-- Optional -->
        <script src="plugins/Timepicker/dist/i18n/jquery-ui-timepicker-addon-i18n.min.js" type="text/javascript"></script>
        <script>
            $('#txtDateAndTime').datetimepicker({
                dateFormat: 'yy-mm-dd',
                timeFormat: "HH:mm:ss",
            });
        </script>
        <!--main js file end-->
    </body>
</html>