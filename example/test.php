<?php 

// require autoload class
require './vendor/autoload.php';

// Require Dotenv Class; To load environment varaibles.
$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

require getcwd() . '/InstantMailer.php';

$header_name = $_ENV['MAIL_SOURCE_USERNAME'];
$html_body = '<h2>Testing InstantMailer</h2>';
$recipient = $_ENV['RECIPIENT_MAIL_ADDRESS'];
$sender_email_address = $_ENV['MAIL_SOURCE_ADDRESS'];
$sender_email_address_password = $_ENV['MAIL_SOURCE_ADDRESS_PASSWORD'];
$subject = "Instant Mailer TEST";
$message = null;
$sender_email_username = $_ENV['MAIL_SOURCE_ADDRESS'];
$attachment = null;

$mail = new InstantMailer(
    $header_name, 
    $html_body, 
    $recipient,  
    $sender_email_address, 
    $sender_email_address_password, 
    $subject, 
    $message, 
    $sender_email_username, 
    $attachment
);

// var_dump($mail->test()); // Test if the Class works by returning your mail configurations from .env

if ($mail->php_mailer() == true) {
    echo "Email Sent!";
}
else {
    echo "Email Unsent!";
}


