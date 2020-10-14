<?php
//require './PHPMailer/src/Exception.php';
//require './PHPMailer/src/PHPMailer.php';
//require './PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
set_time_limit(0) ;
for ($nombre_de_mails = 1; $nombre_de_mails <= 1000; $nombre_de_mails++)
{
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.orange.fr";
$mail->Port = 587; // or 465
$mail->IsHTML(true);
$mail->Username = "nakhila@orange.fr";
$mail->Password = "Amine06..";
$mail->SetFrom("nakhila@orange.fr");
$mail->Subject = "Poeme";
$mail->Body = "n";
$mail->AddAddress("a.nakhil@lprs.fr");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 }
 ?>
