<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = " -Host name- ";
    $mail->SMTPAuth = true;
    $mail->Username = ' -your email- ';
    $mail->Password = ' -your secret key- ';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    
    $mail->setFrom(' -your email- ');
    $mail->addAddress(' -send to- ');
    $mail->Subject = 'A mail sent from PHP';
    $mail->Body = 'Hello from PHP!';

    $mail->send();

    echo 'Message sent';

} catch (Exception $e) {

    echo 'Message not sent: ', $mail->ErrorInfo;

}
