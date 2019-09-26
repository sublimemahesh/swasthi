<?php

include_once(dirname(__FILE__) . '/Setting.php');
include_once(dirname(__FILE__) . '/Helper.php');
include_once(dirname(__FILE__) . '/Upload.php');
include_once(dirname(__FILE__) . '/Database.php');
include_once(dirname(__FILE__) . '/User.php');
include_once(dirname(__FILE__) . '/Message.php');
include_once(dirname(__FILE__) . '/Validator.php');
include_once(dirname(__FILE__) . '/Service.php');
include_once(dirname(__FILE__) . '/Comments.php');
include_once(dirname(__FILE__) . '/Slider.php');
include_once(dirname(__FILE__) . '/Page.php');
include_once(dirname(__FILE__) . '/Banner.php');
include_once(dirname(__FILE__) . '/DailyHoroscope.php');
include_once(dirname(__FILE__) . '/DefaultData.php');
include_once(dirname(__FILE__) . '/DailyHoroscopeDate.php');

include_once(dirname(__FILE__) . '/Blog.php');
include_once(dirname(__FILE__) . '/BlogPhoto.php');
include_once(dirname(__FILE__) . '/BlogCategory.php');

include_once(dirname(__FILE__) . '/Sign.php');


function dd($data) {
    var_dump($data);
    exit();
}
function redirect($url) {
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';

    echo $string;
    exit();
}
