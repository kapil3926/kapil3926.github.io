<?php
$subject = 'You Got Message'; // Subject of your email
$to = 'kapil.patel@enlightvision.com';  //Recipient's E-mail
$emailTo = $_REQUEST['email'];

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['message'];

$email_from = $name.'<'.$email.'>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: ".$name.'<'.$email.'>'."\r\n"; // Sender's E-mail
$headers .= "Return-Path: " . $email . "\r\n"; // Corrected the Return-Path header

// Initialize the message variable
$message = '';
$message .= 'Name : ' . $name . "\n";
$message .= 'Email : ' . $email . "\n";
$message .= 'Phone : ' . $phone . "\n";
$message .= 'Message : ' . $msg . "\n";

if (@mail($to, $subject, $message, $headers)) {
    // Transfer the value 'sent' to ajax function for showing success message.
    echo 'sent';
} else {
    // Transfer the value 'failed' to ajax function for showing error message.
    echo 'failed';
}
?>
