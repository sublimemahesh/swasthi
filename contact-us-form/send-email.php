<?php

//----------------------Company Information---------------------

$comany_name = "Swasthi";
$website_name = "www.swasthi.com";
$comConNumber = "+94 113663500";
$comEmail = "igmpiyumini0615@gmail.com";
$from = 'igmpiyumini0615@gmail.com';


//----------------------CAPTCHACODE---------------------
session_start();


$response = array();
if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {
    $response['status'] = 'incorrect';
    $response['msg'] = 'Security Code is invalid';
    echo json_encode($response);
    exit();
}

//----------------------Visitor Information---------------------


$first_lname = $_POST['first_name'];
$last_lname = $_POST['last_name'];
$visitor_email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
$captchacode = $_POST['captchacode'];


$email_subject = 'Contact Us Enquiry - Swasthi';


date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'];


include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $visitor_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$headers2 = "From: " . $from . "\r\n";
$headers2 .= "Reply-To: " . $comEmail . "\r\n";
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// Sending mail
if (
        mail($comEmail, $email_subject, $company_message, $headers) &&
        mail($visitor_email, $email_subject, $visitor_message, $headers2)) {

    $response['status'] = 'correct';
    $response['msg'] = "Your message has been sent successfully";
//"Your message has been sent successfully"
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'incorrect';
    $response['msg'] = "Could not be sent your message";
    echo json_encode($response);
    exit();
} 
