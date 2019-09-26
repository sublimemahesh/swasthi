<<<<<<< HEAD
  <div class="hs_top_header_main_Wrapper">
            <div class="container">
                <div class="hs_header_logo_left hidden-xs">
                    <div class="hs_logo_wrapper">
                        <a href="./"><img src="images/content/top_logo.jpg" class="img-responsive logo-1" alt="logo" title="Logo"/></a>
                    </div>
                </div>
                <div class="hs_header_logo_right">
                    </div>
                    <div class="hs_btn_wrapper">
                        <ul>
                            <li><a href="#" class="hs_btn_hover">Appointments</a></li>
                        </ul>
                    </div>
                    <div class="hs_header_add_wrapper hidden-xs hidden-sm reach">
                        <div class="hs_header_add_icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="hs_header_add_icon_cont">
                            <h5>Reach Us</h5>
                            <p>No 55,Isipathanarama Rd, Navinna</p>
=======
<div class="hs_top_header_main_Wrapper">
    <div class="container">
        <div class="hs_header_logo_left hidden-xs">
            <div class="hs_logo_wrapper">
                <a href="./"><img src="images/content/top_logo.jpg" class="img-responsive" alt="logo" title="Logo"/></a>
            </div>
        </div>
        <div class="hs_header_logo_right">
            <!--                    <div class="hs_top_user_profile" data-toggle="modal" data-target="#myModal">
                                    <img src="images/header/top_user.jpg" alt="user">
                                    <p><i class="fa fa-plus"></i></p>
                                </div>-->
            <div class="hs_btn_wrapper">
                <ul>
                    <li><a href="#" class="hs_btn_hover">Appointments</a></li>
                </ul>
            </div>
            <div class="hs_header_add_wrapper hidden-xs hidden-sm reach">
                <div class="hs_header_add_icon">
                    <i class="fa fa-home"></i>
                </div>
                <div class="hs_header_add_icon_cont">
                    <!--                            <h5>Reach Us</h5>
                                                <p>601 , Ram Nagar Dewas</p>-->
                    <h5>Reach Us</h5>
                    <p>No 55,Isipathanarama Rd, Navinna</p>
                </div>
            </div>
            <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                <div class="hs_header_add_icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="hs_header_add_icon_cont">
                    <h5>Talk to Swasthi</h5>
                    <p>+94 77 789 7990</p>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">LogIn</h4>
>>>>>>> #14 Create Blog Option
                        </div>
                        <div class="modal-body">
                            <input type="email" placeholder="Enter Your Email...">
                            <input type="password" placeholder="Enter Your Password...">
                            <button type="submit">Submit</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs top header End -->
<!-- hs Navigation Start -->
<div class="hs_navigation_header_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 header-margin">
                <nav class="hs_main_menu hidden-xs">
                    <ul>
                        <li>
                            <div class="dropdown-wrapper menu-button">
                                <a class="menu-button" href="./">Home</a>
                            </div>
                        </li>
                        <li>
                            <a class="menu-button" href="about.php">About Us</a>
                        </li>
                        <li>
                            <div class="dropdown-wrapper menu-button">
                                <a class="menu-button" href="services.php">Services</a>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-wrapper menu-button">
                                <a class="menu-button" href="daily-horoscope.php">Daily Horoscope</a>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-wrapper menu-button">
                                <a class="menu-button">Blog </a>
                                <div class="drop-menu">
                                    <a class="menu-button" href="blog.php">All</a>
                                    <?php
                                    $CATEGORY  = new BlogCategory(NULL);
                                    foreach ($CATEGORY->all() as $category) {
                                        ?>
                                        <a class="menu-button" href="blog.php?id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="menu-button" href="customer-feedback.php">Feedback </a>
                        </li>
                        <li>
                            <a class="menu-button" href="contact.php">Contact Us </a>
                        </li>
                    </ul>
                </nav>
                <header class="mobail_menu visible-xs">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="hs_logo">
                                    <a href="index.html"><img src="images/content/mobile_logo.png" alt="Logo" title="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="cd-dropdown-wrapper">
                                    <a class="house_toggle" href="#0">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631" style="enable-background:new 0 0 511.63 511.631;"
                                             xml:space="preserve">
                                        <g>
                                        <g>
                                        <path d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
                                              c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
                                              c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z"
                                              />
                                        <path d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
                                              c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
                                              c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z"
                                              />
                                        <path d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
                                              C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
                                              c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z"/>
                                        <path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
                                              c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
                                              c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z
                                              "/>
                                        </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                    </a>
                                    <nav class="cd-dropdown">
                                        <h2><a href="index.html">Horoscope</a></h2>
                                        <a href="#0" class="cd-close">Close</a>
                                        <ul class="cd-dropdown-content">
                                            <li>
                                                <form class="cd-search">
                                                    <input type="search" placeholder="Search...">
                                                </form>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Home</a>

<<<<<<< HEAD
                        </div>
                    </div>
                </div>
            </div>
        <!--</div>-->
        <div class="hs_navigation_header_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 header-margin">
                        <nav class="hs_main_menu hidden-xs">
                            <ul>
                                <li>
                                    <div class="dropdown-wrapper menu-button">
                                        <a class="menu-button" href="./">Home</a>
                                    </div>
                                </li>
                                <li>
                                    <a class="menu-button" href="about.php">About Us</a>
                                </li>
                                <li>
                                    <div class="dropdown-wrapper menu-button">
                                        <a class="menu-button" href="services.php">Services</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-wrapper menu-button">
                                        <a class="menu-button" href="daily-horoscope.php">Daily Horoscope</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-wrapper menu-button">
                                        <a class="menu-button" href="blog.php">Blog </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="menu-button" href="customer-feedback.php">Feedback </a>
                                </li>
                                <li>
                                    <a class="menu-button" href="contact.php">Contact Us </a>
                                </li>
                            </ul>
                        </nav>
                        <header class="mobail_menu visible-xs">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="hs_logo">
                                            <a href="./"><img src="images/header/responsive-logo.png" alt="Logo" title="Logo"></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="cd-dropdown-wrapper">
                                            <a class="house_toggle" href="#0">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631" style="enable-background:new 0 0 511.63 511.631;"
                                                     xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
                                                      c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
                                                      c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z"
                                                      />
                                                <path d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
                                                      c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
                                                      c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z"
                                                      />
                                                <path d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
                                                      C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
                                                      c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z"/>
                                                <path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
                                                      c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
                                                      c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z
                                                      "/>
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </a>
                                            <nav class="cd-dropdown">
                                                <h2><a href="./">Swasthi</a></h2>
                                                <a href="#0" class="cd-close">Close</a>
                                                <ul class="cd-dropdown-content">
                                                    <li>
                                                        <a href="./">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="about.php">About US</a>
                                                    </li>
                                                    <li>
                                                        <a href="services.php">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="daily-horoscope.php">Daily Horoscope</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog.php">Blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="customer-feedback.php">Feedback</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.php">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
=======
                                                <ul class="cd-secondary-dropdown is-hidden">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                    <li>
                                                        <a href="index2.html">Home2</a>
                                                    </li>
                                                    <!-- .has-children -->


                                                </ul>
                                                <!-- .cd-secondary-dropdown -->
                                            </li>
                                            <!-- .has-children -->
                                            <li>
                                                <a href="index.html">About US</a>
                                            </li>
                                            <!-- .has-children -->

                                            <li class="has-children">
                                                <a href="#">Pages</a>

                                                <ul class="cd-secondary-dropdown is-hidden">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li>
                                                        <a href="aries.html">Aries</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                    <li>
                                                        <a href="chinese.html">Chinese</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                    <li>
                                                        <a href="chinese_single.html">Chinese-Single</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                    <li>
                                                        <a href="crystal.html">Crystal</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                    <li>
                                                        <a href="kundli_dosh.html">Kundli-Dosh</a>
                                                    </li>
                                                    <!-- .has-children -->
                                                    <li>
                                                        <a href="numerology.html">Numerology</a>
                                                    </li>
                                                    <!-- .has-children -->
                                                    <li>
                                                        <a href="palm.html">Palm</a>
                                                    </li>
                                                    <!-- .has-children -->
                                                    <li>
                                                        <a href="tarot.html">Tarot</a>
                                                    </li>
                                                    <!-- .has-children -->
                                                    <li>
                                                        <a href="tarot_single.html">Tarot-Single</a>
                                                    </li>
                                                    <!-- .has-children -->
                                                    <li>
                                                        <a href="vastu_shastra.html">Vastu-Shastra</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                </ul>
                                                <!-- .cd-secondary-dropdown -->
                                            </li>
                                            <!-- .has-children -->
                                            <li class="has-children">
                                                <a href="#">Shop</a>

                                                <ul class="cd-secondary-dropdown is-hidden">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li>
                                                        <a href="shop.html">Shop</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                    <li>
                                                        <a href="shop_single.html">Shop-Single</a>
                                                    </li>
                                                    <!-- .has-children -->


                                                </ul>
                                                <!-- .cd-secondary-dropdown -->
                                            </li>
                                            <!-- .has-children -->
                                            <li class="has-children">
                                                <a href="#">Blog</a>

                                                <ul class="cd-secondary-dropdown is-hidden">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li>
                                                        <a href="blog_categories.html">Blog-Categories</a>
                                                    </li>
                                                    <!-- .has-children -->

                                                    <li>
                                                        <a href="blog_single.html">Blog-Single</a>
                                                    </li>
                                                    <!-- .has-children -->


                                                </ul>
                                                <!-- .cd-secondary-dropdown -->
                                            </li>
                                            <!-- .has-children -->
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>

                                        </ul>
                                        <!-- .cd-dropdown-content -->



                                    </nav>
                                    <!-- .cd-dropdown -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .cd-dropdown-wrapper -->
                </header>
            </div>
            <!--                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs">
                                    <div class="hs_navi_searchbar_wrapper">
                                        <input type="text" placeholder="Search here">
                                        <button><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="hs_navi_cart_wrapper">
                                        <div class="dropdown-wrapper menu-button">
                                            <a class="menu-button" href="#"><i class="flaticon-shop"></i><span>3</span></a>
                                            <div class="drop-menu">
            
                                                <div class="cc_cart_wrapper1 menu-button">
                                                    <div class="cc_cart_img_wrapper">
                                                        <img src="images/content/cart_img.jpg" alt="cart_img" />
                                                    </div>
                                                    <div class="cc_cart_cont_wrapper">
                                                        <h4><a href="#">Gemstone</a></h4>
                                                        <p>Quantity : 2 × $45</p>
                                                        <h5>$90</h5>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                </div>
                                                <div class="cc_cart_wrapper1 menu-button">
                                                    <div class="cc_cart_img_wrapper">
                                                        <img src="images/content/cart_img.jpg" alt="cart_img" />
                                                    </div>
                                                    <div class="cc_cart_cont_wrapper">
                                                        <h4><a href="#">Gemstone</a></h4>
                                                        <p>Quantity : 2 × $45</p>
                                                        <h5>$90</h5>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                </div>
                                                <div class="cc_cart_wrapper1 menu-button">
                                                    <div class="cc_cart_img_wrapper">
                                                        <img src="images/content/cart_img.jpg" alt="cart_img" />
                                                    </div>
                                                    <div class="cc_cart_cont_wrapper">
                                                        <h4><a href="#">Gemstone</a></h4>
                                                        <p>Quantity : 2 × $45</p>
                                                        <h5>$90</h5>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                </div>
                                                <div class="cc_cart_wrapper1 menu-button">
                                                    <div class="hs_effect_btn ceckout_btn">
                                                        <ul>
                                                            <li><a href="#" class="hs_btn_hover">checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
        </div>
    </div>
</div>
>>>>>>> #14 Create Blog Option
