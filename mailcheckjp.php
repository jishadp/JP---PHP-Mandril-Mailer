<?php require 'class.phpmailer.php';

$mail = new PHPMailer();

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'netstager@gmail.com';                // SMTP username
$mail->Password = 'Yx3u8CxAdOT5ij_JgH4BFg';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@genderpark.gov.in';
$mail->FromName = 'Gender Park';//
$mail->AddAddress($to);  // Add a recipient

$mail->AddAddress('jishad@netstager.com', 'Josh Adams');  // Add a recipient
$mail->AddAddress('nimisha@netstager.com', 'Josh Adams'); 
$mail->AddAddress('prajeesh@netstager.com', 'Josh Adams'); // Add a recipient


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