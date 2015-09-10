<?php 
/*
CREATED BY : Jishad P (jishadp369@gmail.com)
*/
require 'class.phpmailer.php';

$mail = new PHPMailer();

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'MANDRILL_USERNAME_HERE';                // SMTP username
$mail->Password = 'MANDRILL_PASSWORD';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'EXAMPLE_FROM_NAME';
$mail->FromName = 'EXAMPLE_FROM_NAME';//
$mail->AddAddress($to);  // Add a recipient

$mail->AddAddress('test@gmail.com', 'GMAIL USER');  // Add a recipient
$mail->AddAddress('test2@yahoo.com', 'YAHOO USER'); 
$mail->AddAddress('test3@outlook.com', 'OUTLOOK USER'); // Add a recipient


$mail->IsHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';