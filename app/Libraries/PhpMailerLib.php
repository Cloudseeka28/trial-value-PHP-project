<?php // app/Libraries/PhpMailerLib.php

namespace App\Libraries;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PhpMailerLib
{
    public function sendEmail($to, $subject, $message)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0; // Set to 2 for debugging
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Specify SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'info@trialvalueapp.com';
            $mail->Password = 'qoshfonqcanmfclu';
            $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl'
            $mail->Port = 587; // Use appropriate port

            // Recipients
            $mail->setFrom('info@trialvalueapp.com', 'Trialvalueapp');
            $mail->addAddress($to);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
