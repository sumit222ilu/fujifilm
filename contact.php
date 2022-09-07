<?php
//get data from form
$to = "iamsmpthapliyal@gmail.com";
$name = $_POST['name'];
$email= $_POST['email'];
$countryCode = $_POST['countryCode'];
$Number= $_POST['number'];
$product= $_POST['product'];
$occupation= $_POST['occupation'];

$body_message = 'name: '.$name. "\r\n";
$body_message .= 'email: '.$email. "\r\n";
$body_message .= 'countryCode: '.$countryCode. "\r\n";
$body_message .= 'number: '.$Number. "\r\n";
$body_message .= 'product: '.$product. "\r\n";
$body_message .= 'occupation: '.$occupation. "\r\n";

$subject = 'query';

$headers = "Mime-Version: 1.0" . "\r\n";
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers = 'From: <iamsmpthapliyal@gmail.com>' . "\r\n";
$sent = mail($to, $subject, $body_message, $headers);

if ($sent){
    echo "<script>alert('Information successfully sent to fujifilm.com')</script> ";
}else {
    echo "<script>alert('Email sending failed...')</script> ";
}
//  echo "<script>window.open('','_self')</script>";
?>