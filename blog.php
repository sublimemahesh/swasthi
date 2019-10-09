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
        <title>Swasthi | Blog</title>
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
                            <h2>Blog</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                        <div class="hs_indx_title_right_wrapper">
                            <ul>
                                <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hs service wrapper Start -->
        <div class="hs_blog_categories_main_wrapper">
            <div class="container">
                <div class="row">
                    <?php
                    if (empty($id)) {
                        $blogs = Blog::all();
                    } else {
                        $blogs = Blog::getBlogPostsByCategory($id);
                    }
                    if (count($blogs) > 0) {
                        foreach ($blogs as $key => $blog) {
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
                                            <h5>
                                                <?php
                                                if (strlen($blog['title']) > 60) {
                                                    echo substr($blog['title'], 0, 60) . '...';
                                                } else {
                                                    echo $blog['title'];
                                                }
                                                ?>
                                            </h5>
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
                    } else {
                        ?>
                        <h6>No blog posts in the database.</h6>
                        <?php
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
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/custom.js"></script>
        <!--main js file end-->
    </body>
</html>