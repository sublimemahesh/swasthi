<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$DAILYHOROSCOPE = new DailyHoroscope($id);
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Daily Horoscope</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>

        <section class="content">
            <div class="container-fluid">  
                <?php
                $vali = new Validator();

                $vali->show_message();
                ?>
                <!-- Vertical Layout -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Edit Daily Horoscope</h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a href="manage-daily-horoscopes.php">
                                            <i class="material-icons">list</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <form class="form-horizontal"  method="post" action="post-and-get/daily-horoscope.php" enctype="multipart/form-data"> 
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select class="form-control place-select1 show-tick" name="sign">
                                                    <option> --Please Select a Sign-- </option>
                                                    <?php
                                                    foreach (DefaultData::getSigns() as $key => $sign) {
                                                        if ($key == $DAILYHOROSCOPE->sign) {
                                                            ?>
                                                            <option value="<?php echo $key; ?>" selected><?php echo $sign; ?></option>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <option value="<?php echo $key; ?>"><?php echo $sign; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label class="form-label">Sign</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select class="form-control place-select1 show-tick" name="date">
                                                    <option> --Please Select a Date-- </option>
                                                    <?php
                                                    for ($i = 1; $i <= 12; $i++) {
                                                        if ($i == $DAILYHOROSCOPE->date) {
                                                            ?>
                                                            <option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label class="form-label">Date</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Description</label>
                                        <div class="form-line">
                                            <textarea id="description" name="description" class="form-control" rows="5"><?php echo $DAILYHOROSCOPE->description; ?></textarea> 
                                        </div>

                                    </div>
                                    <div class="col-md-12"> 
                                        <input type="hidden" name="id" value="<?php echo $DAILYHOROSCOPE->id; ?>"/>
                                        <input type="submit" name="update" class="btn btn-primary m-t-15 waves-effect" value="Save"/>
                                    </div>
                                </form>
                                <div class="row clearfix">  </div>
                                <hr/>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- #END# Vertical Layout -->

            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/add-new-ad.js" type="text/javascript"></script>


        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });


        </script>
    </body>

</html>