<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["email"])) {

    $mail = new PHPMailer(true);

    $email = $_POST["email"];
    $name  = $_POST["name"];

    try {

        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'lorem.ipsum.sample.email@gmail.com';
        $mail->Password   = 'tetmxtzkfgkwgpsc';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('SRM.email@gmail.com', 'Hotel Website');
        $mail->addAddress($_POST["email"]);
        $mail->addReplyTo('SRM.email@gmail.com', 'SRM Hotels');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Reaching Out!';
        $mail->Body = "
            <p>Dear $name</p>

            <p>Welcome to our home! We're thrilled to have you on board.</p>
            
            <p>This is a booking confirmation email.</p>
            
            <p>Feel free to reach out if you have any questions or feedback. We're here to help!</p>
            
            <p>Thank you for choosing us!</p>
            
            <p>Best regards,<br>SRM hotels</p>

        ";

        $mail->send();
        echo "
            <script>
            alert('Message was sent successfully. Thank your for reaching us!');
            document.location.href = 'index.php';
            </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
